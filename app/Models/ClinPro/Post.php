<?php

namespace App\Models\ClinPro;

use App\Models\Professional;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = ['comment', 'link', 'user_id'];


    public function likes()
    {
        return $this->hasMany(PostLike::class);
    }

    public function comments()
    {
        return $this->hasMany(PostComment::class);
    }

    public function post_medias()
    {
        return $this->hasMany(PostMedia::class);
    }

    public function professional()
    {
        return $this->hasOne(Professional::class, "user_id", "user_id");
    }

    public function like()
    {
        $userLogued = Auth::user()->id;
        return $this->hasOne(PostLike::class, "post_id", "id")->where('user_id', $userLogued);
    }

    public function scopeMostRelevant($query)
    {
        return $query
            ->select('posts.*', DB::raw('SUM(posts_likes.id) + COUNT(post_comments.id) as relevance_score'), DB::raw('(SELECT COUNT(id) FROM posts_likes WHERE posts.id = posts_likes.post_id) AS likes_count'), DB::raw('(SELECT COUNT(id) FROM post_comments WHERE posts.id = post_comments.post_id) AS posts_count'))
            ->leftJoin('posts_likes', 'posts.id', '=', 'posts_likes.post_id')
            ->leftJoin('post_comments', 'posts.id', '=', 'post_comments.post_id')
            ->where('posts.created_at', '>=', Carbon::now()->subDays(30))
            ->groupBy('posts.id')
            ->orderBy('relevance_score', 'desc')
            ->with('post_medias', 'professional', 'like');
    }
}
