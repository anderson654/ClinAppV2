<?php

namespace App\Models\ClinPro;

use App\Models\Professional;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    use HasFactory;

    public function professional()
    {
        return $this->hasOne(Professional::class, "user_id", "user_id");
    }
    public function like()
    {
        return $this->hasOne(PostLike::class, "user_id", "user_id");
    }
}
