<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceSlot extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['value', 'service_id', 'user_id'];
    protected $hidden = ["created_at", "updated_at"];

    protected $appends = ["professional_name", "professional_avatar"];

    public function getProfessionalNameAttribute()
    {
        $professional = Professional::where("user_id", $this->user_id)->first();
        if (isset($professional)) {
            return $professional->name;
        }
        return null;
    }

    public function getProfessionalAvatarAttribute()
    {
        $professional = Professional::where("user_id", $this->user_id)->first();
        if (isset($professional)) {
            return $professional->avatar;
        }

        return null;
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function professional()
    {
        return $this->hasOne(Professional::class, 'id', 'user_id');
    }
    public function hasSlot($service)
    {
        $slots = ServiceSlot::where([['service_id', '=', $service], ['user_id', '=', NULL]])->count();
        if ($slots) {
            return true;
        }
        return false;
    }
    public function payment()
    {
        return $this->hasOne(Payment::class, 'service_slot_id', 'id')
            ->where('payment_status_id', 1)
            ->where('payment_category', 6)
            ->where('payment_method_id', 5);
    }

    public function professionalAsaasAccount()
    {
        return $this->hasOne(PaymentAccount::class, 'user_id', 'user_id');
    }

    public function payment_professional()
    {
        return $this->hasOne(Payment::class, 'service_slot_id', 'id')->where('payment_category', 6);
    }
}
