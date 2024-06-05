<?php

namespace App\Models;

use App\Models\Asaas\AsaasCustomer;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['id', 'name', 'email', 'password', 'leads', 'cod_source', 'hashMobile', "role_id", "franchise_id", "cpf", "cnpj"];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // protected $appends = ["qt_finished_services"];

    public function getQtFinishedServicesAttribute()
    {
        return $this->hasMany(Service::class, 'client_id')->where('status_id', 4)->whereNull('deleted_at')->count();
    }
    public function getQtFinishTrainingsAttribute()
    {
        return $this->hasMany(CompletedTraining::class, 'professional_id')->where('status_id', 3)->count();
    }
    public function getQtServicesFeedbacksAttribute()
    {
        return $this->hasMany(ServicesFeedbacks::class, 'professional_user_id')->count();
    }
    public function address()
    {
        return $this->hasMany(Address::class, 'user_id')->whereNull('deleted_at');
    }

    public function address_id()
    {
        return $this->hasOne(Address::class, 'user_id')->whereNull('deleted_at');
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class, 'id', 'user_id')->whereNull('deleted_at');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'user_id')->whereNull('deleted_at');
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class, 'client_id')->whereNull('deleted_at');
    }

    public function qt_finished_services()
    {
        return $this->hasMany(Service::class, 'client_id')->where('status_id', 4)->whereNull('deleted_at');
    }

    public function qt_booked_services()
    {
        return $this->hasMany(Service::class, 'client_id')->whereIn('status_id', [2, 3])->whereNull('deleted_at');
    }

    public function credit_card()
    {
        return $this->hasMany(CreditCardDetail::class, 'user_id', 'id')->whereNull('deleted_at');
    }

    public function client_user()
    {
        return $this->hasOne(Client::class, 'user_id', 'id')->whereNull('deleted_at');
    }
    public function client()
    {
        return $this->hasOne(Client::class, 'user_id', 'id')->whereNull('deleted_at');
    }
    public function professional()
    {
        return $this->hasOne(Professional::class, 'user_id', 'id')->whereNull('deleted_at');
    }

    public function asaas_customer()
    {
        return $this->hasOne(AsaasCustomer::class, 'user_id');
    }

    public function payment_account_franchise()
    {
        return $this->hasOne(PaymentAccount::class, 'franchise_id', 'franchise_id');
    }

    public function payment_account()
    {
        return $this->hasOne(PaymentAccount::class, 'user_id');
    }
    public function contactUser()
    {

        return $this->hasOne(Contact::class, 'id', 'user_id');
    }
    public function professional_not_freeze()
    {
        return $this->hasOne(Professional::class, 'user_id', 'id')->where('status', 1);
    }
    public function professional_freeze()
    {
        return $this->hasOne(Professional::class, 'user_id', 'id')->where('status', 0);
    }
    public function professional_monthly_payments()
    {
        return $this->hasMany(Payment::class, 'user_id', 'id')->whereDate('created_at', '>=', '2022-10-01')
            ->where('payment_category', 1)
            ->where('payment_status_id', 1)
            ->where('payment_type', 'C');
    }
    public function monthly_payment()
    {
        return $this->hasMany(Payment::class, 'user_id')->where('payment_category', 1);
    }
    public function dayofweek()
    {
        return $this->hasOne(Dayofweek::class, 'user_id', 'id');
    }
    public function feedbacks()
    {
        return $this->hasMany(ServicesFeedbacks::class, 'professional_user_id');
    }
    public function password_pag_clin()
    {
        return $this->hasOne(PasswordPagclin::class, 'user_id', 'id');
    }
    public function plan_professional()
    {
        return $this->hasOne(ProfessionalsPlan::class, 'user_id', 'id');
    }

    public function mei_professional()
    {
        return $this->hasOne(MeiProfessional::class, 'user_id', 'id');
    }

    public function setCpfAttribute($value)
    {
        $this->attributes['cpf'] = str_replace(['.', '-'], '', $value);
    }
}
