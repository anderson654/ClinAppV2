<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TrainingCategory extends Model
{
    use HasFactory;
    protected $table = 'training_categories';

    // protected $appends = ['total_trainings', 'total_complet'];
    // protected $appends = ['total_complet'];

    protected $hidden = ["created_at", "update_at", "deleted_at"];
    public function trainings()
    {
        return $this->hasMany(Training::class, 'training_category_id')->where('status_id',1);
    }
    public function trainings_complete()
    {
        return $this->hasMany(Training::class, 'training_category_id')->where('status_id',1)->has('complet_trainings_by_user');
    }
}
