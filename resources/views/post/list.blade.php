@extends('layouts.app')
@section('title', '所有文章')
@section('content')
    <link rel="stylesheet" href="{{ asset("css/post.css") }}">
    <div class="container">
        <div class="topics">
            <h1>文章分類</h1>
            @foreach($topics as $topic)
                <x-topic-item :id="$topic->id" :title="$topic->title"></x-topic-item>
            @endforeach
        </div>
        <div class="main window">
            <div class="actions">
                @guest
                    <button onclick="javascript:location.href='{{ route('auth.login') }}'">登入/註冊</button>
                @endguest
                @auth
                    <button onclick="javascript:location.href='{{ route('create', ['topicId' => $topicId]) }}'">發表文章
                    </button>
                    {{--  <button>關注</button> --}}
                    <button onclick="javascript:location.href='{{ route('auth.logout') }}'">登出</button>
                @endauth
            </div>
            <h1 class="posts-title">最新文章</h1>
            @foreach($posts as $post)
                <x-post :id="$post->id" :title="$post->title" :content="$post->content"></x-post>
                <hr>
            @endforeach
        </div>
    </div>
@endsection
