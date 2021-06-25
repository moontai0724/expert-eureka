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
                <table class="form-table">
                    <tr class="form-input">
                        <td class="form-input-label">姓名</td>
                        <td>{{ $user->name }}</td>
                    </tr>
                </table>
            </div>
            <br>
            <div class="window">
                <h1 class="posts-title">已發表文章</h1>
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
    </style>
@endsection
