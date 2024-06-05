<?php

namespace App\Models\ClinPro;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostLike extends Model
{
    use HasFactory;

    protected $table = 'posts_likes';

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
