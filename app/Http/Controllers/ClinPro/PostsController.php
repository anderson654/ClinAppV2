<?php

namespace App\Http\Controllers\ClinPro;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ImageController;
use App\Models\ClinPro\Post;
use App\Models\ClinPro\PostComment;
use App\Models\ClinPro\PostLike;
use App\Models\ClinPro\PostMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function savePost(Request $request)
    {
        //salva o post
        $post = Post::create([
            'comment' => $request->comment,
            'user_id' => Auth::user()->id
        ]);

        if (!$post) {
            return response()->json(['message' => 'erro ao salvar post.']);
        }

        if ($request->imagens) {
            //salva as imagens
            $imageController = new ImageController();
            //pegar a adata para nomear a pasta;
            $month = date('m');
            $year = date('Y');
            $request->merge(['path' => "clinpro/posts/$month-$year/"]);
            $linkImages = $imageController->saveImages($request);

            foreach ($linkImages as $key => $linkImage) {
                # code...
                $postMedia = new PostMedia();
                $postMedia->post_id = $post->id;
                $postMedia->link_media = $linkImage;
                $postMedia->save();
            }
        }

        //retornar o post criado;
        $post = Post::with('post_medias')->find($post->id);

        return response()->json(["message" => $post]);
    }



    public function getPosts(Request $request)
    {
        $mostRelevantPosts = Post::mostRelevant()->paginate(5);

        return response($mostRelevantPosts, 200);
    }

    public function getComments($postId)
    {
        $comments = PostComment::where('post_id', $postId)->with('professional', 'like')->paginate(5);
        return response()->json($comments);
    }

    public function setLikeInPost(Request $request)
    {
        $userIsLogued = Auth::user()->id;
        $existLike = PostLike::where('user_id', $userIsLogued)->where('post_id', $request->post_id)->first();
        if ($existLike) {
            $existLike->delete();
        } else {
            $like = new PostLike();
            $like->user_id = $userIsLogued;
            $like->post_id = $request->post_id;
            $like->save();
        }
        return response()->json(['message' => 'success']);
    }

    public function saveComment(Request $request)
    {
        $userIsLogued = Auth::user()->id;
        $postComments = new PostComment();
        $postComments->user_id = $userIsLogued;
        $postComments->post_id = $request->post_id;
        $postComments->comment = $request->comment;
        $postComments->save();
        return response()->json(['message' => 'success']);
    }

    public function deletComment(Request $request)
    {
        $userIsLogued = Auth::user()->id;
        $comment = PostComment::find($request->comment_id);
        if (isset($comment) && $comment->user_id == $userIsLogued) {
            $comment->delete();
        }
        return response()->json(['message' => 'success']);
    }
}
