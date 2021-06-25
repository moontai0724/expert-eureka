<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Topic;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of post.
     *
     * @return View
     */
    public function index(): View
    {
        /** @var Array<Post> $posts */
        $topics = Topic::all();
        $posts = Post::all();

        return view('post.list')->with(['posts' => $posts, 'topics' => $topics]);
    }
}
