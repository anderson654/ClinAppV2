<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubscriptionDayweek extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $hidden = ["created_at", "updated_at", "deleted_at"];

    protected $appends = ["dayWeekForHumans"];

    protected $fillable = ['id', 'subscription_id', 'dayWeek', 'preferred_professional_id'];

    public function getDayWeekForHumansAttribute()
    {
        $title = '';
        switch ($this->dayWeek) {
            case 0:
                $title = 'Domingo';
                break;
            case 1:
                $title = 'Segunda-feira';
                break;
            case 2:
                $title = 'Terca-feira';
                break;
            case 3:
                $title = 'Quarta-feira';
                break;
            case 4:
                $title = 'Quinta-feira';
                break;
            case 5:
                $title = 'Sexta-feira';
                break;
            case 6:
                $title = 'Sabado';
                break;
            default:
                $title = null;
                break;
        }
        return $title;
    }

    public function preferred_professionals()
    {
        return $this->hasOne(SubscriptionPreferred_professional::class, 'id', 'preferred_professional_id');
    }
    public function subscription()
    {
        return $this->hasOne(Subscription::class, 'id', 'subscription_id');
    }
}
