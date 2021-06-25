<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Topic;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * List all posts.
     *
     * @return View
     */
    public function listAll(): View
    {
        /** @var Array<Topic> $topics */
        $topics = Topic::all();
        /** @var Array<Post> $posts */
        $posts = Post::all()->reverse();

        return view('post.list')->with(['posts' => $posts, 'topics' => $topics, 'topicId' => null]);
    }

    /**
     * List all posts in a topic.
     *
     * @param int|null $topicId
     * @return View
     */
    public function list(int $topicId): View
    {
        /** @var Array<Topic> $topics */
        $topics = Topic::all();
        /** @var Array<Post> $posts */
        $posts = Post::all()->where('topic_id', null, $topicId)->reverse();

        return view('post.list')->with(['posts' => $posts, 'topics' => $topics, 'topicId' => $topicId]);
    }


    /**
     * Show the form for creating a new post.
     *
     * @param int|null $topicId
     * @return View
     */
    public function create(int $topicId = null): View
    {
        /** @var Array<Topic> $topics */
        $topics = Topic::all();

        return view('post.create')->with(['topics' => $topics,'topicId' => $topicId]);
    }

    /**
     * Store a newly created post in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'topic_id' => ['required', 'exists:topics,id'],
            'title' => ['required', 'max:40'],
            'content' => ['required'],
        ]);

        $post = new Post();
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->topic_id = $data['topic_id'];
        $saved = $request->user()->posts()->save($post);
        if (!$saved)
            return back()->withInput($data)->withErrors(['message' => '在儲存時發生未知錯誤']);

        return redirect()->intended('/')->with('message', '新增成功！');
    }
}
