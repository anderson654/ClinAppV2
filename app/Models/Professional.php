<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class Professional extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'user_id', 'cpf', 'has_products', 'birthdate', 'gender', 'avatar', 'mei', 'mei_user', 'mei_passwd', 'social_name', 'is_verified', 'general_register_number_RG'];
    protected $hidden = ["updated_at", "deleted_at", "laravel_through_key", "mei_passwd", "mei_user", "mei", "has_products"];
    protected $appends = ['total_stars', 'amount_services', 'total_raitings', 'total_feedbacks', 'new_total_stars'];


    public function getTotalFeedbacksAttribute()
    {
        return ServicesFeedbacks::where('professional_user_id', $this->user_id)->count();
    }
    public function getNewTotalStarsAttribute()
    {
        return number_format(ServicesFeedbacks::where('professional_user_id', $this->user_id)->avg('evaluate'),1, '.', '');
    }

    public function getTotalStarsAttribute()
    {
        $services_feedbacks = $this->hasMany(ServiceSlot::class, 'user_id', 'user_id')
            ->join('services_feedbacks', 'service_slots.service_id', 'services_feedbacks.service_id')
            ->where('services_feedbacks.evaluate', '!=', NULL);
        $total_services_feedbacks = $services_feedbacks->count();
        $total_stars_services_feedbacks = $services_feedbacks->sum('evaluate');

        if ($total_stars_services_feedbacks && $total_services_feedbacks) {
            $total_stars = ($total_stars_services_feedbacks / $total_services_feedbacks);
            return $total_stars;
        }
        return 0;
    }

    public function getAmountServicesAttribute()
    {
        $amount_services = $this->hasMany(ServiceSlot::class, 'user_id', 'user_id')
            ->join('services', 'service_slots.service_id', 'services.id')
            ->where('services.status_id', 4)->count();
        return $amount_services;
    }

    public function getTotalRaitingsAttribute()
    {
        $total_raitings = $this->hasMany(ServiceSlot::class, 'user_id', 'user_id')
            ->join('services_feedbacks', 'service_slots.service_id', 'services_feedbacks.service_id')
            ->where('services_feedbacks.evaluate', '!=', NULL);
        return $total_raitings->count();
    }
    //relacionamentos
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function dayofweek()
    {
        return $this->hasOne(Dayofweek::class, 'user_id', 'user_id');
    }

    public function myRatings()
    {
        return $this->hasMany(ServiceSlot::class, 'user_id', 'user_id')
            ->join('services_feedbacks', 'service_slots.service_id', 'services_feedbacks.service_id')
            ->where('services_feedbacks.evaluate', '!=', NULL);
    }

    public function amountOfservices()
    {
        return $this->hasMany(ServiceSlot::class, 'user_id', 'user_id')
            ->join('services', 'service_slots.service_id', 'services.id')
            ->where('services.status_id', 4);
    }


    public function subscriptionPreferedProfessional()
    {
        return $this->hasMany(SubscriptionPreferred_professional::class, 'professional_id')->where('deleted_at', '!=', null);
    }


    //funçoes
    public static function calculeStarsProfessional($professional_user_id)
    {

        $professional = Professional::where('user_id', $professional_user_id)->first();

        if (isset($professional->myRatings)) {

            $total_rating = $professional->myRatings->count();

            $total_stars = $professional->myRatings->sum('evaluate');

            $amountOfservices = $professional->amountOfservices->count();

            $professional = Professional::where('user_id', $professional_user_id)->first();

            $professional->amountServices = $amountOfservices;

            $professional->totalRatings = $total_rating;

            try {
                $professional->rating = ($total_stars / $total_rating);
                //code...
            } catch (\Throwable $th) {
                $professional->rating = 0;
            }

            return $professional;
        } else {
            return response()->json([
                'message' => 'profissional não encontrada na base :(.'
            ], 400);
        }
    }

    public function payment_account()
    {
        return $this->hasOne(PaymentAccount::class, 'user_id', 'user_id');
    }
    public function banck_account()
    {
        return $this->hasOne(BankAccount::class, 'user_id', 'user_id');
    }
    public function professional_monthly_payments()
    {
        return $this->hasMany(Payment::class, 'user_id', 'user_id')->whereDate('created_at', '>=', '2022-10-01')
            ->where('payment_category', 1)
            ->where('payment_status_id', 1)
            ->where('payment_type', 'C');
    }

    public function plan_professional()
    {
        return $this->hasOne(ProfessionalsPlan::class, 'user_id', 'user_id');
    }

    public function setCpfAttribute($value)
    {
        $this->attributes['cpf'] = str_replace(['.', '-'], '', $value);
    }
    public function setGeneralRegisterNumberRGAttribute($value)
    {
        $this->attributes['general_register_number_RG'] = str_replace(['.', '-'], '', $value);
    }
    public function setBirthdateAttribute($value)
    {
        $this->attributes['birthdate'] = implode('-', array_reverse(explode("/", $value)));
    }

    /**
     * Esta função cria uma profissional de form manual
     * @param $userId
     * @return User
     */
    public static function createProfessional($userId){

        $user = User::with('professional')->find($userId);

        if(isset($user->professional)){
            return $user->professional;
        }

        $professional = new Professional();
        $professional->name = $user->name ?? null;
        $professional->user_id = $user->id ?? null;
        $professional->cpf = $user->cpf ?? null;
        $professional->save();

        return $professional;
    }
}
