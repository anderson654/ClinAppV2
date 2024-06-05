<?php

namespace App\Models\BootWhatsApp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupResponsesToMessage extends Model
{
    protected $connection = 'db_whats';

    use HasFactory;
    /**
     * Essa função retorna o role_id da resposta
     * @param string $message mensagem que deve ser procurada.
     * @param array $groups em que grupos deve ser pesquisada a mensagem.
     * @return int retorna o role_id da resposta.
     */
    public static function getRoleResponse($message, $groups)
    {
        $responseToGroup = ResponsesToGroup::whereIn('group_response_id', $groups)->where('response', strtolower($message))->with('groups_response')->first();
        return isset($responseToGroup->groups_response->responses_role_id) ? $responseToGroup->groups_response->responses_role_id : null;
    }
}
