<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionalsPlan extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'professional_subscription_plan_id', 'status_id', 'last_renew'];

    public function professional_subscription_plan()
    {
        return $this->hasOne(ProfessionalSubscriptionPlan::class, 'id', 'professional_subscription_plan_id');
    }
}
