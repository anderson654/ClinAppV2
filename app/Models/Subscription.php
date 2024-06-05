<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Subscription
 *
 * @package App
 * @property string $title
 */
class Subscription extends Model
{
    use SoftDeletes;
    protected $fillable = ['client_id', 'service_category_id', 'service_type_id', 'status_id', 'total_time', 'startTime', 'startDay', 'other_additionals_id'];
    protected $hidden = ["created_at", "updated_at", "deleted_at"];

    protected $appends = ['service_categories_title', 'service_types_title', 'subscription_statuses_title'];

    public function getSubscriptionStatusesTitleAttribute()
    {
        return SubscriptionStatus::where('id', $this->status_id)->first()->title;
    }
    public function getServiceTypesTitleAttribute()
    {
        return ServiceType::where('id', $this->service_type_id)->first()->title;
    }
    public function getServiceCategoriesTitleAttribute()
    {
        return ServiceCategory::where('id', $this->service_category_id)->first()->title;
    }
    public function preferred_professionals()
    {
        return $this->hasMany(SubscriptionPreferred_professional::class, 'subscription_id');
    }
    public function free_subscriptionDayWeeks()
    {
        return $this->hasMany(SubscriptionDayweek::class, 'subscription_id')->where('preferred_professional_id', NULL);
    }
    public function subscriptionDayWeeks()
    {
        return $this->hasMany(SubscriptionDayweek::class, 'subscription_id');
    }
    public function prefered_professionals()
    {
        return $this->hasMany(SubscriptionPreferred_professional::class, 'subscription_id');
    }
    public function aguardandoPagamento()
    {
        return $this->hasOne(Payment::class, 'subscription_id')->where('payment_status_id', 1);
    }

    public function service_type()
    {
        return $this->belongsTo(ServiceType::class, 'service_type_id');
    }

    public function approved()
    {

        return $this->hasOne(Payment::class, 'subscription_id')->where('payment_status_id', 2)->where('aproved', '!=', 1);
    }
    public function service_category()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'client_id')/*->where('role_id', 4)*/;
    }
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'user_id');
    }
    public function whoScheduled()
    {
        return $this->belongsTo(User::class, 'salesman_id');
    }
    public function corporateClient()
    {
        return $this->belongsTo(CorporateClient::class, 'client_id', 'user_id');
    }
    public function address()
    {
        return $this->belongsTo(Address::class, 'client_id', 'user_id');
    }
    public function contact()
    {
        return $this->belongsTo(Contact::class, 'client_id', 'user_id');
    }

    public function status()
    {
        return $this->belongsTo(SubscriptionStatus::class, 'status_id');
    }

    public function payment_status()
    {
        return $this->belongsTo(PaymentStatus::class, 'payment_status_id');
    }
    public function clean()
    {
        return $this->hasOne(SubscriptionDayweek::class, 'id', 'subscription_id');
    }
}
