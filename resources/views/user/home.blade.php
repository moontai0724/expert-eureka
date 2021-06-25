@extends('layouts.app')
@section('title', '主頁')
@section('content')
    <link rel="stylesheet" href="{{ asset("css/post.css") }}">
    <div class="container">
        <div class="main">
            <div class="window">
                <div class="image">
                    <img src="{{ asset("img/avatar.png") }}" alt="avatar">
                </div>
                <div class="property">
                    <span class="key">姓名</span>
                    <span class="value">{{ $user->name }}</span>
                </div>
            </div>
            <br>
            <div class="window">
                <h1 class="posts-title">已發表文章 ({{ count($posts) }})</h1>
                @foreach($posts as $post)
                    <x-post :id="$post->id" :user-id="$post->user_id" :title="$post->title" :content="$post->content"></x-post>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
    <style>
        .image {
            text-align: center;
        }

        .image img {
            width: 250px;
            border-radius: 50%;
            margin: auto;
        }

        .property {
            margin: 10px;
            text-align: center;
            font-size: 150%;
        }

        .property .key {
            font-weight: bold;
        }

        .property span {
            margin: 10px;
        }
    </style>
@endsection
