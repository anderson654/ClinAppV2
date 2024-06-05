<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesFeedbacks extends Model
{
    use HasFactory;
    protected $fillable = ['professional_user_id', 'service_id', 'evaluate', 'reason', 'text'];
    protected $hidden = ["updated_at"];

    public function service()
    {
        return $this->hasOne(Service::class, 'id', 'service_id');
    }
    public function servicenew()
    {
        return $this->hasOne(ServiceNew::class, 'id', 'service_id');
    }
    public function professional_user()
    {
        return $this->hasOne(User::class, 'id', 'professional_user_id');
    }

    /**
     * Esta função seta o numero de estrelas que o cliente deu para a profissional especificada.
     * @param int $numStars numero de 1-5
     * @param int $userId id da profissional
     * @param int $serviceId serviço que esta aprofissional
     * @return bool
     */
    public static function saveFeedbackStarsToUser($numStars, $userId, $serviceId)
    {
        return ServicesFeedbacks::updateOrCreate(
            ['service_id' => $serviceId, 'professional_user_id' => $userId],
            ['evaluate' => $numStars]
        );
    }

    /**
     * seta a avaliação escrita do user.
     * @param string $text avaliação do cliente
     * @param int $userId id da profissional
     * @param int $serviceId serviço que esta aprofissional
     * @return bool
     */
    public static function saveFeedbackTextToUser($text, $userId, $serviceId)
    {
        return ServicesFeedbacks::updateOrCreate(
            ['service_id' => $serviceId, 'professional_user_id' => $userId],
            ['text' => $text]
        );
    }


    /**
     * Esta função seta o numero de estrelas que o cliente deu para a profissional especificada.
     * @param int $numStars numero de 1-5
     * @param int $serviceId serviço que esta aprofissional
     * @return bool
     */
    public static function saveFeedbackStarsToService($numStars, $serviceId)
    {
        return ServicesFeedbacks::updateOrCreate(
            ['service_id' => $serviceId, 'professional_user_id' => null],
            ['evaluate' => $numStars]
        );
    }


    /**
     * seta a avaliação escrita do user.
     * @param string $text avaliação do cliente
     * @param int $serviceId serviço que esta aprofissional
     * @return bool
     */
    public static function saveFeedbackTextToService($text,  $serviceId)
    {
        return ServicesFeedbacks::updateOrCreate(
            ['service_id' => $serviceId, 'professional_user_id' => null],
            ['text' => $text]
        );
    }
}
