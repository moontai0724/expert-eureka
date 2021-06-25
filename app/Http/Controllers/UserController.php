<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use \Illuminate\Contracts\View\View;

class UserController extends Controller
{
    /**
     * List all posts.
     *
     * @param User $user
     * @return View
     */
    public function home(User $user): View
    {
        /** @var Array<Post> $posts */
        $posts = Post::query()->where(['user_id' => $user->id])->orderByDesc('created_at')->get()->all();

        return view('user.home')->with(['posts' => $posts, 'user' => $user]);
    }
}
