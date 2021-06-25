<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Post extends Component
{
    /**
     * The post id.
     *
     * @var int
     */
    public $id;

    /**
     * The user id.
     *
     * @var int
     */
    public $userId;

    /**
     * The post title.
     *
     * @var string
     */
    public $title;

    /**
     * The post content.
     *
     * @var string
     */
    public $content;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $content, $userId, $id = null)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->title = $title;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post');
    }
}
