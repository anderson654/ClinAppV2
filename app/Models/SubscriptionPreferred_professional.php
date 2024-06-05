<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubscriptionPreferred_professional extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['subscription_id', 'professional_id'];
    protected $hidden = ["created_at", "updated_at", "deleted_at"];
    protected $appends = ['match', 'info_professional'];


    public function getMatchAttribute()
    {
        $preferedProfessionals = SubscriptionDayweek::where('preferred_professional_id', $this->id)->first();
        return $preferedProfessionals ? true : false;
    }

    public function getInfoProfessionalAttribute()
    {
        $professional = Professional::where('id', $this->professional_id)->first();
        return $professional;
    }



    public function professionals()
    {
        return $this->belongsTo(Professional::class, 'professional_id');
    }
    public function subscriptionDayWeeks()
    {
        return $this->hasMany(SubscriptionDayweek::class, 'id', 'subscription_id');
    }
}
