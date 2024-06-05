<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AppProfessionalConfig;
use App\Http\Controllers\Finance\CreditCardsController;
use App\Http\Controllers\Finance\PaymentsController;
use App\Http\Controllers\Services\ServicesController;
use App\Http\Controllers\Asaas\AsaasBillingController;
use App\Http\Controllers\Asaas\CustomerController;
use App\Http\Controllers\AsaasController;
use App\Http\Controllers\Services\SubscriptionController;
use App\Http\Controllers\CarManufacturerController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\CashbackController;
use App\Http\Controllers\ClinBlueController;
use App\Http\Controllers\Services\ServiceController;
use App\Http\Controllers\emailController;
use App\Http\Controllers\Weni\ApiWeniController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\ReasonTypeController;
use App\Http\Controllers\Services\CleanController;
use App\Http\Controllers\ServicesFeedbackController;
use App\Http\Controllers\Services\DiscountCouponController;
use App\Http\Controllers\Finance\WebhooksController;
use App\Http\Controllers\FranchiseController;
use App\Http\Controllers\Leads;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\WebHooks\RdStation\RdStationController;
use App\Models\Asaas\Asaas;
use App\Models\Asaas\AsaasCustomer;
use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;
use App\Http\Controllers\ClinPro\PostsController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\Serpro\SerproController;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Mail\MailerSenderController;
use App\Http\Controllers\Mail\WebHoockEmail;
use App\Http\Controllers\PushNotificationController;
use App\Http\Controllers\Egreja\webhookController;
use App\Http\Controllers\Questions\QuestionSurveysController;
use App\Http\Controllers\V1\Asaas\AccountController;
use App\Http\Controllers\V1\Asaas\RegisterDocuments;
use App\Http\Controllers\ZApi\ZApiWebHookController;

Route::get(
    '/some_url',
    function () {
        return response()->json([
            'message' => "Token is wrong"
        ], 401);
    }
)->name('login');




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Rota temporaria ep antigo
Route::post('createAddressProfessional/{id}', [AddressController::class, 'createAddress']);


Route::post('sendConfirmEmail', [emailController::class, 'sendConfirmEmail']);
Route::post('sendCodeVerification', [AuthController::class, 'sendCodeVerification']);
Route::post('sendServiceReview', [ApiWeniController::class, 'sendServiceReview']);

//Teste send E-mail
Route::post('testEmail', [ServicesController::class, 'sendTestEmail']);

Route::post('callbackTestMailersend', [MailerSenderController::class, 'callbackTestMailersend']);

Route::post('resetPasswordEmail', [emailController::class, 'resetPassword']);
Route::post('verifyCode', [AuthController::class, 'verifyCode']);
Route::post('updatePassword', [UserController::class, 'updatePassword']);
Route::post('verifyStatusAccount', [UserController::class, 'verifyStatusAccount']);

Route::post('/registerCostumer', [AuthController::class, 'registerCostumer']);
Route::get('/phoneMigration', [AuthController::class, 'phoneMigration']);
Route::post('/registerCostumerLead', [AuthController::class, 'registerCostumerLead']);


Route::post('/login', [AuthController::class, 'login']);
Route::post('/loginWeni', [AuthController::class, 'loginWeni']);
Route::post('/loginWhatsApp', [AuthController::class, 'loginWhats']);

Route::post('/changeCidadesToCities', [AddressController::class, 'changeCidadesToCities']);

Route::post('/get_price_clean', [CleanController::class, 'get_price_clean']);

Route::post('checkCpfExist', [UserController::class, 'checkCpfExist']);
Route::post('checkEmailExist', [UserController::class, 'checkEmailExist']);

Route::post('/getServicesTypes', [ServicesController::class, 'getServicesTypes']);

Route::get('/testeBucket', [ServicesController::class, 'testBucket']);
Route::get('/uploadImage', [ServicesController::class, 'uploadImage']);

Route::post('/webHoockEmail', [WebHoockEmail::class, 'webHoockEmail']);

Route::post('/setNotificationEmail', [UserController::class, 'setNotificationEmail']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/client/registerCreditCard', [CreditCardsController::class, 'userCreditCardTokenization']);
    Route::post('/me', [AuthController::class, 'me']);
    // Route::post('/getUserProfessional', [ProfessionalController::class, 'getUserProfessional']);

    Route::post('/signOut', [AuthController::class, 'signout']);

    Route::post('/checkCostumer', [AuthController::class, 'checkCostumer']);

    Route::post("/getAsaasCustomer", [CustomerController::class, 'getAsaasCustomer']);

    Route::get('/storeContact', [UserController::class, 'storeContact']);
    Route::post('/updateUser', [UserController::class, 'updateUser']);

    Route::post("/services/getServicesByOrder", [ServicesController::class, "getServicesByOrder"])->middleware("isAdminOrUser");

    Route::post('/getServices', [ServicesController::class, 'get_services']);

    Route::post('/nextServices', [ServicesController::class, 'nextServices']);

    Route::post('getOfferNewService', [ServicesController::class, 'getOfferNewService']);

    Route::post('/getProfessionalsService', [ServicesController::class, 'getProfessionalsService']);

    Route::post('/update_service/{id}', [ServicesController::class, 'update_service']);
    Route::post('/storeServices', [ServicesController::class, 'storeServices']);
    Route::post('/createServicePayment', [PaymentsController::class, 'createServicePayment']);
    Route::post('/applyDiscountCoupon', [DiscountCouponController::class, 'applyDiscountCoupon']);


    Route::post('/GetServicesTypeCategories', [ServicesController::class, 'GetServicesTypeCategories']);
    Route::post('/GetServicesTypeCategoriesItems', [ServicesController::class, 'GetServicesTypeCategoriesItems']);

    Route::post('/createpayment', [AsaasBillingController::class, 'create']);

    Route::post('/getSubscriptions', [SubscriptionController::class, 'getSubscriptions']);

    Route::post('/getPreferredProfessionals', [SubscriptionController::class, 'getPreferredProfessionals']);

    //Rotas de carro
    Route::post('/getCarsManufacturers', [CarManufacturerController::class, 'getAll']);
    Route::post('/myCars', [CarsController::class, 'getAll']);
    Route::post('/getCarsModel', [CarModelController::class, 'getCarsModel']);
    Route::post('/getCarsPrices', [CarsController::class, 'getCarsPrices']);
    //Novas rotas de carro

    //Testar essa rota;
    Route::post('/getAddresses', [AddressController::class, 'getAddresses']);
    Route::post('/getAddress/{id}', [AddressController::class, 'getAddress']);
    Route::post('/updateAddress/{id}', [AddressController::class, 'updateAddress']);
    Route::post('/deleteAddress/{id}', [AddressController::class, 'deleteAddress']);
    Route::post('/createAddress', [AddressController::class, 'createAddress']);
    Route::post('/completAddress', [AddressController::class, 'completAddress']);

    Route::post('/getCreditCards', [CreditCardsController::class, 'getCreditCards']);
    Route::post('/deleteCreditCard/{id}', [CreditCardsController::class, 'destroy']);

    Route::post('/createCpf', [UserController::class, 'createCpf']);
    //rotas de carros
    Route::post('/deleteCarClient', [CarsController::class, 'deleteCarClient']);
    Route::post('/createCarModels', [CarModelController::class, 'create']);
    Route::post('/clientCreateCars', [CarsController::class, 'clientCreateCars']);

    Route::post('/getProfessional', [ProfessionalController::class, 'getProfessional']);
    Route::post('/getAllProfessionals', [ProfessionalController::class, 'getAllProfessionals']);
    Route::post('/deletPreferedProfessional', [ProfessionalController::class, 'deletPreferedProfessional']);
    Route::post('/appendPreferedProfessional', [ProfessionalController::class, 'appendPreferedProfessional']);

    Route::post('/getProfessional', [ProfessionalController::class, 'getProfessional']);

    Route::post("/getCleanScheduled", [ServicesController::class, 'getCleanScheduled']);
    Route::post("/getCarWashScheduled", [ServicesController::class, 'getCarWashScheduled']);
    Route::post("/getSanitationScheduled", [ServicesController::class, 'getSanitationScheduled']);

    Route::post('/saveFeedbackProfessional', [ServicesFeedbackController::class, 'create']);
    Route::post('/checkProfessionalAvaliable', [ServicesFeedbackController::class, 'checkProfessionalAvaliable']);

    Route::post('/updateUserSite', [UserController::class, 'updateUserSite']);

    Route::post('/sendEmailConfirmService', [MailerSenderController::class, 'apiSendEmailConfirmationService']);
    Route::post('/finishService', [ServicesController::class, 'finishService']);

    Route::post('/newUpdateUser', [UserController::class, 'newUpdateUser'])->middleware("isAdminOrUser");

    Route::resource('cashback', CashbackController::class);
});

Route::group(['prefix' => 'professional', 'middleware' => ['auth:sanctum']], function () {
    Route::post('/getAllProfessionals', [ProfessionalController::class, 'getAllProfessionals']);
    Route::post('/appendPreferedProfessional', [ProfessionalController::class, 'appendPreferedProfessional']);
    Route::post('/deletPreferedProfessional', [ProfessionalController::class, 'deletPreferedProfessional']);
    Route::post('/createMonthlyPayment', [ProfessionalController::class, 'createMonthlyPayment'])->middleware("isAdminOrUser");
});

Route::group(['prefix' => 'subscription', 'middleware' => ['auth:sanctum']], function () {
    Route::post('/getSubscriptions', [SubscriptionController::class, 'getSubscriptions']);
    Route::post('/getPreferredProfessionals', [SubscriptionController::class, 'getPreferredProfessionals']);
    Route::post('/renewSubscription', [SubscriptionController::class, 'renewSubscription'])->middleware("isAdminOrUser");
    Route::post('/renewAllSubscriptions', [SubscriptionController::class, 'subscriptionsAvailableRenew'])->middleware("isAdminOrUser");
});

Route::group(['prefix' => 'user/client', 'middleware' => ['auth:sanctum']], function () {
    Route::post('/listPayments', [UserController::class, 'listPayments']);
    Route::post('/deleteClientAccount', [UserController::class, 'deleteClient'])->middleware("isAdminOrUser");
});

Route::group(['prefix' => 'reasonType', 'middleware' => ['auth:sanctum']], function () {
    Route::post('getReasonTypes', [ReasonTypeController::class, 'store']);
});

Route::group(['prefix' => 'webhooks'], function () {
    Route::post('charges', [WebhooksController::class, 'webHookCharge']);
    //WebHook RdStation
    Route::post('storeLead', [RdStationController::class, 'storeLead']);
    Route::post('paymentProfessional', [WebhooksController::class, 'paymentProfessional']);
    Route::post('cancelScheduledPix', [WebhooksController::class, 'cancelScheduledPix']);
});

Route::group(['prefix' => 'payment', 'middleware' => ['auth:sanctum']], function () {
    Route::post('franchise/createDebitPayment', [FranchiseController::class, 'createDebitPayment'])->middleware("isAdminOrUser");
    Route::post('professional/paymentP2P', [ProfessionalController::class, 'transferP2P'])->middleware("isAdminOrUser");
    Route::post('professional/createCreditPayment', [ProfessionalController::class, 'createCreditPayment'])->middleware("isAdminOrUser");
    Route::post('professional/externalPayments', [ProfessionalController::class, 'externalPayments']);
    Route::post('professional/discountProfessional', [ProfessionalController::class, 'discountProfessional']);
});

Route::group(['prefix' => 'service'], function () {
    //profissional
    Route::post('/createOtherAdditionalsToService', [ServicesController::class, 'createOtherAdditionalsToService']);
    Route::post('/deleteServiceLead', [ServicesController::class, 'deleteServiceLead']);
});
Route::group(['prefix' => 'cars'], function () {
    //profissional
    Route::post('/additionals', [CarsController::class, 'getAdditionals']);
});

Route::group(['prefix' => 'asaas', 'middleware' => ['auth:sanctum', 'isAdminOrUser']], function () {
    Route::post('/createDaughterAccount', [AsaasController::class, 'createDaughterAccount']);
    Route::post('/createAcountAllProfessionals', [AsaasController::class, 'createAcountAllProfessionals']); //essa rota esta no lugar errado deve ficar no grupo de professionals e ser tranferida para professionals controller
    Route::post('/transfersP2P', [AsaasController::class, 'transfersP2P']);
    Route::post('/createPixProfessionals', [AsaasController::class, 'createPixProfessionals']);
    Route::post('/transferExternalAccount', [AsaasController::class, 'transferExternalAccount']);
});
Route::group(['prefix' => 'lead'], function () {
    Route::post('/createContact', [LeadsController::class, 'createContact']);
});

Route::group(['prefix' => 'services', 'middleware' => ['auth:sanctum', 'isAdminOrUser']], function () {
    Route::post('/deletServicesByOrder', [PaymentsController::class, 'deletServicesByOrder']);
});

Route::group(['prefix' => 'clinpro', 'middleware' => ['auth:sanctum', 'isAdminOrUser']], function () {
    Route::post('/setPreferredDays', [ProfessionalController::class, 'setPreferredDays']);
    Route::post('/updateProfessional', [ProfessionalController::class, 'updateProfessional']);
    Route::post('/getProfessionalUser', [ProfessionalController::class, 'getProfessionalUser']);
    Route::post('/extratoAsaas', [ProfessionalController::class, 'extratoAsaas']);
    Route::post('/extratoClin', [ProfessionalController::class, 'extratoClin']);
    Route::post('/deletMyAccount', [ProfessionalController::class, 'deletMyAccount']);
    // Route::post('/getVideoTrainings', [ProfessionalController::class, 'getVideoTrainings']);
    Route::post('/saveSurveyResponse', [ProfessionalController::class, 'saveSurveyResponse']);
    Route::post('/checkStatusQuestions', [ProfessionalController::class, 'checkStatusQuestions']);
    Route::post('/saveOrUpdateStatusTraining', [ProfessionalController::class, 'saveOrUpdateStatusTraining']);
    Route::post('/checkStatusVideo', [ProfessionalController::class, 'checkStatusVideo']);
    Route::post('/saveFeedBackTraining', [ProfessionalController::class, 'saveFeedBackTraining']);
    Route::post('/checkSendPix', [ProfessionalController::class, 'checkSendPix']);
    Route::post('/sendPix', [ProfessionalController::class, 'sendPix']);
    Route::post('/gerateKeyPix', [ProfessionalController::class, 'gerateKeyPix']);
    Route::post('/getKeysPix', [ProfessionalController::class, 'getKeysPix']);
    Route::post('/deletPixKey', [ProfessionalController::class, 'deletPixKey']);
    Route::post('/myPlan', [ProfessionalController::class, 'myPlan']);
    Route::post('/savePlan', [ProfessionalController::class, 'savePlan']);
    Route::post('/geratePixQrCodePlan', [ProfessionalController::class, 'geratePixQrCodePlan']);
    Route::post('/acceptService', [ProfessionalController::class, 'acceptService']);
    Route::post('/savePasswordPagClin', [ProfessionalController::class, 'savePasswordPagClin']);
    // Route::post('/getPlans', [ProfessionalController::class, 'getPlans']);
});
Route::group(['prefix' => 'clinpro', 'middleware' => ['auth:sanctum', 'isAdminOrUser', 'freePlan']], function () {
    Route::post('/getVideoTrainings', [ProfessionalController::class, 'getVideoTrainings']);
    Route::post('/getAllVideoTrainings', [ProfessionalController::class, 'getAllVideoTrainings']);
    Route::post('/getCategoriesVideos', [ProfessionalController::class, 'getCategoriesVideos']);
    Route::post('/getTrainningQuestions', [ProfessionalController::class, 'getTrainningQuestions']);
    Route::post('/newRouteUser', [ProfessionalController::class, 'newRouteUser']);
});
Route::group(['prefix' => 'clinpro', 'middleware' => ['auth:sanctum', 'isAdminOrUser', 'educlinPlan']], function () {
    Route::post('/getPreferredDays', [ProfessionalController::class, 'getPreferredDays']);
    Route::post('/feedBack', [ProfessionalController::class, 'feedBack']);
    Route::post('/getMonthlyPayment', [ProfessionalController::class, 'getMonthlyPayment']);
    // Route::post('/myServices', [ProfessionalController::class, 'myServices']);
    Route::post('/getBalance', [ProfessionalController::class, 'getBalance']);
    Route::post('/avaliableServices', [ProfessionalController::class, 'avaliableServices']);
    Route::post('/schedule', [ProfessionalController::class, 'schedule']);
    Route::post('/getTotalTransfers', [ProfessionalController::class, 'getTotalTransfers']);
    Route::post('/decodePix', [ProfessionalController::class, 'decodePix']);
    Route::post('/payQrCode', [ProfessionalController::class, 'payQrCode']);
    Route::post('/getCards', [ProfessionalController::class, 'getCards']);
    Route::post('/cardApplication', [ProfessionalController::class, 'cardApplication']);
});



Route::group(['prefix' => 'clinpro', 'middleware' => ['auth:sanctum', 'isAdminOrUser', 'defaultSecurity']], function () {
    Route::post('/checkMessage', [AuthController::class, 'checkMessage']);
});

// Route::group(['prefix' => 'clinpro', 'middleware' => ['auth:sanctum', 'isAdminOrUser', 'educlinPlan']], function () {
//     Route::get('/getPosts', [PostsController::class, 'getPosts']);
// });

Route::group(['prefix' => 'serpro', 'middleware' => ['auth:sanctum']], function () {
    Route::get('/autentication', [SerproController::class, 'autentication']);
    Route::post('/GerarBarCodeDas', [SerproController::class, 'GerarBarCodeDas']);
    Route::post('/gerarDas', [SerproController::class, 'gerarDas']);
    Route::post('/dasProfessional', [SerproController::class, 'dasProfessional']);
});


Route::post("createCarsTable", [carsController::class, "createCarsTable"]);
Route::post("createCarsModels", [carsController::class, "createCarsModels"]);

//teste web hoocks remover apos implementação na v1
Route::post("/weebhookJunoDIGITAL_ACCOUNT_CREATED", [UserController::class, 'weebhookJunoDIGITAL_ACCOUNT_CREATED']);

//ajustar novas rotas aqui
// Route::group(['prefix' => 'clinpro', 'middleware' => ['auth:sanctum', 'isAdminOrUser', 'defaultSecurity']], function () {

Route::group(['prefix' => 'clinpro', 'middleware' => ['auth:sanctum', 'isAdminOrUser']], function () {
    Route::post('/loginPagClin', [ProfessionalController::class, 'loginPagClin']);
});











//rotas 2024 revisar e remover as anteriores;
//esta rota aceita a origem da v1;
Route::group(['prefix' => 'v1/asaas'], function () {
    Route::resource('account', AccountController::class);
    Route::resource('onboardingurl', RegisterDocuments::class)->middleware('auth:sanctum');
});


//caminhos de rotas atualizados app professionals.//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//pegar a verção do app;
Route::get('/infoAppProfessionals', [AppProfessionalConfig::class, 'infoAppProfessionals']);


//default modules
//isAdminOrUser: garante que outro usuario não possa alterar conta de outras pessoas.
//auth:sanctum: garante que toda a rota deve ter um token tipo Bearer


//rotas app clientes
Route::group(['middleware' => ['auth:sanctum', 'isAdminOrUser']], function () {
    Route::post('/updateUser', [UserController::class, 'newUpdateUser']);
    Route::post('/getPixCharge', [PaymentsController::class, 'createPixPayment']);
    Route::post('/updateUser', [UserController::class, 'updateUser']);
});

Route::post('/generatePublicLink', [ImageController::class, 'getDocument']);


//rotas app profrssionals
Route::group(['middleware' => ['auth:sanctum']], function () {
    //rotas abertas
    Route::post('/isLogued', [AuthController::class, 'isLogued']);
    Route::post('/getPlans', [ProfessionalController::class, 'getPlans']);
    Route::post('getUserProfessional', [ProfessionalController::class, 'getUserProfessional']);
    Route::post('saveImageProfile', [ImageController::class, 'saveImageProfile']);
    Route::post('saveImages', [ImageController::class, 'saveImages']);
    Route::post('saveBio', [ProfessionalController::class, 'saveBio']);
    Route::post('/saveDocuments', [ClinBlueController::class, 'saveDocuments']);
    Route::get('/getStates', [ClinBlueController::class, 'getStates']);
    Route::post('/saveImageDocuments', [ClinBlueController::class, 'saveImageDocuments']);
    Route::post('/savePushNotificationToken', [PushNotificationController::class, 'savePushNotificationToken']);
    Route::get('/getPosts', [PostsController::class, 'getPosts']);

    //teste de rota para envio de documento
    Route::post('/sendDocumentToAsaas', [ClinBlueController::class, 'sendDocumentToAsaas']);

    //rota para pegar so questionarios disponiveis.
    Route::get('/questionSurveys', [QuestionSurveysController::class, 'questionSurveys']);
    Route::post('/saveQuestionSurveys', [QuestionSurveysController::class, 'saveQuestionSurveys']);



    Route::group(['prefix' => 'professional', 'middleware' => ['professional']], function () {

        Route::post('/myServices', [ProfessionalController::class, 'myServices']); //essa rota vai ter que sair daqui
        Route::post('/newMontylyPayment', [ProfessionalController::class, 'newMontylyPayment']);



        Route::group(['prefix' => 'educlin'], function () {
            Route::group(['middleware' => 'freePlan'], function () {
                Route::post('/getCategoriesVideos', [ProfessionalController::class, 'getCategoriesVideos']);
            });
            // Route::group(['middleware' => 'educlinPlan'], function () {
            // });
            // Route::group(['middleware' => 'proPlan'], function () {
            // });
            // Route::group(['middleware' => 'proMasterPlan'], function () {
            // });
        });
        Route::group(['prefix' => 'pagclin'], function () {

            // Route::group(['middleware' => 'educlinPlan'], function () {
            // });

            Route::group(['middleware' => 'educlinPlan'], function () {
                Route::post('/getBalance', [ProfessionalController::class, 'getBalance']);
                Route::post('/extratoAsaas', [ProfessionalController::class, 'extratoAsaas']);
                Route::post('/loginPagClin', [ProfessionalController::class, 'loginPagClin']);
            });

            //defaultSecurity exige a assinatura
            Route::group(['middleware' => 'defaultSecurity', 'educlinPlan'], function () {
                Route::post('/sendPix', [ProfessionalController::class, 'sendPix']);
            });
            // Route::group(['middleware' => 'proPlan'], function () {
            // });
            // Route::group(['middleware' => 'proMasterPlan'], function () {
            // });
        });
        Route::group(['prefix' => 'clinpro'], function () {
            // Route::group(['middleware' => 'freePlan'], function () {
            // });
            Route::group(['middleware' => 'educlinPlan'], function () {
                Route::post('/setLikeInPost', [PostsController::class, 'setLikeInPost']);
                Route::post('/getPreferredDays', [ProfessionalController::class, 'getPreferredDays']);
                Route::post('/getMonthlyPayment', [ProfessionalController::class, 'getMonthlyPayment']);
                Route::post('/feedBack', [ProfessionalController::class, 'feedBack']);
                Route::post('/setPreferredDays', [ProfessionalController::class, 'setPreferredDays']);
                Route::post('/myServices', [ProfessionalController::class, 'myServices']);
                Route::get('/getComments/{postId}', [PostsController::class, 'getComments']);
                Route::post('/saveComment', [PostsController::class, 'saveComment']);
                Route::post('/deletComment', [PostsController::class, 'deletComment']);
                Route::post('/savePost', [PostsController::class, 'savePost']);
            });
            // Route::group(['middleware' => 'proPlan'], function () {
            // });p
            // Route::group(['middleware' => 'proMasterPlan'], function () {
            // });
        });
        Route::group(['prefix' => 'mei'], function () {
            // Route::group(['middleware' => 'freePlan'], function () {
            // });
            // Route::group(['middleware' => 'educlinPlan'], function () {
            // });
            // Route::group(['middleware' => 'proPlan'], function () {
            // });
            Route::group(['middleware' => 'proMasterPlan'], function () {
                Route::post('/checkAcessMei', [ProfessionalController::class, 'checkAcessMei']);
                Route::post('/saveCnpj', [ProfessionalController::class, 'saveCnpj']);
                Route::post('/requestMeiOpen', [ProfessionalController::class, 'requestMeiOpen']);
                Route::post('/listDasProfessional', [SerproController::class, 'listDasProfessional']);
                Route::get('/meiProfessional', [ProfessionalController::class, 'meiProfessional']);
            });
        });
    });
    // //client
    // Route::group(['prefix' => 'client'], function () {
    // });
});


Route::get('/testCreateToken', [ProfessionalController::class, 'testCreateToken']);

//teste intregação BOT E-greja//
Route::group(['prefix' => 'egreja'], function () {

    Route::post('/postNeedHelp', [webhookController::class, 'needHelp']);
    Route::post('/sendHelpRequest', [webhookController::class, 'sendHelpRequest']);
    Route::post('/sendDataRequester', [webhookController::class, 'sendDataRequester']);
});

//boot whatsapp
Route::post('/aoreceber', [ZApiWebHookController::class, 'aoreceber']);
