@extends('layouts.app')
@section('title', '文章')
@section('content')
    <link rel="stylesheet" href="{{ asset("css/post.css") }}">
    <div class="container">
        <div class="topics">
            <h1>文章分類</h1>
            @foreach($topics as $topic)
                <x-topic-item :id="$topic->id" :title="$topic->title"></x-topic-item>
            @endforeach
        </div>
        <div class="main">
            <div class="window">
                <div class="actions">
                    @guest
                        <button onclick="javascript:location.href='{{ route('auth.login') }}'">登入/註冊</button>
                    @endguest
                    @auth
                        <button onclick="javascript:location.href='{{ route('respond', ['post' => $post]) }}'">回應</button>
                        <button onclick="javascript:location.href='{{ route('auth.logout') }}'">登出</button>
                    @endauth
                </div>
                <x-post :user-id="$post->user_id" :title="$post->title" :content="$post->content"></x-post>
            </div>
            <br>
            <div class="window">
                <h1 class="posts-title">回應</h1>
                @foreach($responses as $response)
                    <x-post :user-id="$response->user_id" :title="$response->title" :content="$response->content"></x-post>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection
