<?php

namespace App\Http\Controllers\ZApi;

use App\Http\Controllers\Controller;
use App\Models\BootWhatsApp\GroupResponsesToMessage;
use App\Models\BootWhatsApp\Message;
use App\Models\BootWhatsApp\StartLoopMessages;
use App\Models\Service;
use App\Models\ServicesFeedbacks;
use App\Models\Utils\BootUtils;
use Illuminate\Http\Request;

class BootConversationController extends Controller
{
    //private
    private $injectionDependencies;
    private $responsesToMessage;
    private $groupResponsesToMessage;
    private $message;
    private $methods;
    private $currentMessage;
    private $paramns;
    private $zApiController;
    private $user;

    public function __construct(ZApiWebHookController $zApiWebHookController)
    {
        $this->injectionDependencies = $zApiWebHookController;
        $this->currentMessage = $this->injectionDependencies->conversation->message;
        $this->responsesToMessage = $this->injectionDependencies->conversation->message->group_response_to_message;
        $this->message = $this->injectionDependencies->data['text']['message'];
        $this->groupResponsesToMessage = $this->responsesToMessage->pluck('group_response_id');
        $this->methods = [
            'next_question' => 'nextQuestion',
            'save_avaliable' => 'saveAvaliable',
            'save_feedback' => 'saveFeedback',
            'save_avaliable_service' => 'saveAvaliableService',
            'loop_question' => 'loopMessage',
            'finish_question' => 'finishConversation',
            'finish_question_seletive' => 'finishQuestionSeletive'
        ];
        $this->zApiController = new ZApiController();
        $this->user = $this->injectionDependencies->user;
    }

    public function nextMessageInTemplate()
    {
        if (!$this->responsesToMessage->count()) {
            //caso o grupo de respostas não exista
            $this->filterAndExecuteMethods(4);
            return;
        }
        //existe o grupo de resposta mais a mesma não foi identificada
        $roleResponse = GroupResponsesToMessage::getRoleResponse($this->message, $this->groupResponsesToMessage);
        if (!$roleResponse) {
            //enviar mensagem que não foi possivel entender a resposta;
            $this->filterAndExecuteMethods(5);
            return;
        }

        $this->filterAndExecuteMethods($roleResponse);


        // dd($this->responsesToMessage);



        //1-positiva
        //2-negativa
        //3-exit

        // $roleResponse
        // dd($this->responsesToMessage);

        // if(!$existResponseToMessage){
        //     //caso o grupo de respostas não exista
        //     // $this->filterAndExecuteMethods(4);
        //     // return;
        // }

        // //verifica se a resposta existe em algum grupo de respostas
        // if(!$this->injectionDependencies->conversation->message->group_response_to_message){

        // }



        //verifica se a questão atual respondida possui uma resposta
        // dd($this->injectionDependencies->conversation->message->group_response_to_message);
    }

    public function filterAndExecuteMethods($roleResponse)
    {
        switch ($roleResponse) {
            case 1:
                # code...
                $this->executeMethods($this->currentMessage->positive_response_method ?? 'next_question');
                break;
            case 2:
                $this->executeMethods($this->currentMessage->negaative_response_method);
                break;
            case 3:
                # code...
                break;
            case 4:
                if (isset($this->currentMessage->not_exist_group_responses_method)) {
                    $this->executeMethods($this->currentMessage->not_exist_group_responses_method);
                }
                # code...
                //não  possui um grupo de respostas
                // $this->executeMethods($this->question->not_exist_group_responses_method);
                break;
            case 5:
                $this->zApiController->sendMessage($this->user->phone, "Não foi possivel entender a sua resposta.");
                # code...
                // $this->executeMethods($this->question->not_indentify_response_method ?? 'not_identify_response');
                break;
            default:
                # code...
                break;
        }
    }

    public function executeMethods($name)
    {

        if (isset($this->methods[$name])) {
            $method = $this->methods[$name];
            if (is_array($method)) {
                foreach ($method as $m) {
                    $this->$m();
                }
            } else {
                $this->$method();
            }
        } else {
            // Lidar com o caso padrão ou desconhecido, se necessário
        }
    }
    //default methods
    public function nextQuestion()
    {
        $this->manualyNextQuestion($this->currentMessage->priority + 1);
    }

    public function manualyNextQuestion($priority, $update = true)
    {
        $nextMessage = $this->sendNextMessage($priority);
        if ($update) {
            $this->injectionDependencies->conversation->updateConversationMessage($nextMessage->id);
        }
        // $this->updatePrayerRequest($nextMessage->id);
    }

    public function sendNextMessage($priority)
    {
        $nextMessage = Message::where('template_id', $this->currentMessage->template_id)->where('priority', $priority)->first();
        $message = $nextMessage->message;
        if ($this->paramns) {
            $message = BootUtils::setDefaultNames($this->paramns, $message);
        }
        $this->zApiController->sendMessage($this->user->phone, str_replace('\n', "\n", $message));
        return $nextMessage;
    }

    public function createLoopMessage($messageId)
    {
        //cria um loop para determinadas mensagens
        //user_id
        //conversation_id
        //message_id
        //count
        StartLoopMessages::createNewLoopMessage($this->user->id, $this->injectionDependencies->conversation->id, $messageId);
    }

    public function manualyLoopMessage($messageId)
    {
        $this->createLoopMessage($messageId);
        $this->nextQuestion();
    }

    public function loopMessage()
    {
        $messageId = $this->currentMessage->loop_message_id;
        $this->manualyLoopMessage($messageId);
    }

    // public function reSendMessage()
    // {
    //     $this->manualyNextQuestion($this->currentMessage->priority, false);
    // }

    //metodos criados ////////////////////////////////////////////////////////////////////////////////////////////////////
    public function saveAvaliable()
    {
        //pega as profissionais do service;
        $serviceId = $this->injectionDependencies->conversation->conversation_to_service->service_id;
        $service = Service::with('professionals')->find($serviceId);

        if ($service->professionals->count() == 1) {
            ServicesFeedbacks::saveFeedbackStarsToUser(
                $this->injectionDependencies->data['text']['message'],
                $service->professionals[0]->user_id,
                $serviceId
            );
        }
        //salvar a avaliação e ir para a proxima message
        $this->nextQuestion();
    }
    public function saveFeedback()
    {
        //pega as profissionais do service;
        $serviceId = $this->injectionDependencies->conversation->conversation_to_service->service_id;
        $service = Service::with('professionals')->find($serviceId);

        if ($service->professionals->count() == 1) {
            ServicesFeedbacks::saveFeedbackTextToUser(
                $this->injectionDependencies->data['text']['message'],
                $service->professionals[0]->user_id,
                $serviceId
            );
        } else {
            ServicesFeedbacks::saveFeedbackTextToService(
                $this->injectionDependencies->data['text']['message'],
                $serviceId
            );
        }

        //salvar a avaliação e ir para a proxima message
        //aqui a ultima resposta deve ser diferente de acordo com o numero de estrelas dadas pelo cliente.
        $this->nextQuestion();
        $this->injectionDependencies->conversation->closeConversation();
        //salva os par
        dd('O feed escrito foi salvo com sucesso e fechado a chamada.');
    }

    public function saveAvaliableService()
    {
        $serviceId = $this->injectionDependencies->conversation->conversation_to_service->service_id;
        $service = Service::with('professionals')->find($serviceId);

        if ($service->professionals->count() > 1) {
            ServicesFeedbacks::saveFeedbackStarsToService(
                $this->injectionDependencies->data['text']['message'],
                $serviceId
            );
        }
        //salvar a avaliação no serviço e continuar o fluxo
        $this->manualyNextQuestion(2);
        return;
    }

    public function finishConversation()
    {
        $this->manualyNextQuestion(7);
        $this->injectionDependencies->conversation->closeConversation();
    }

    public function finishQuestionSeletive()
    {
        $serviceId = $this->injectionDependencies->conversation->conversation_to_service->service_id;
      
        $negativeFeedback = ServicesFeedbacks::where('service_id', $serviceId)->whereIn('evaluate', [1, 2, 3])->exists();

        if(!$negativeFeedback){
            $this->manualyNextQuestion(4);
        }else{
            $this->manualyNextQuestion(6);
        }
        $this->injectionDependencies->conversation->closeConversation();
    }
}
