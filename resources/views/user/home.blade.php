@extends('layouts.app')
@section('title', '主頁')
@section('content')
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">

    <div class="box"><a href='{{ route('auth.login') }}'>登入</a><span>/</span><a href=''>註冊</a></div>
    <div class="box1">
        <nav>
            <h2>文章分類</h2>
            <ul>
                <li><a href=''>心情</a></li>
                <li><a href=''>遊戲</a></li>
                <li><a href=''>大學</a></li>
                <li><a href=''>高中</a></li>
                <li><a href=''>數學</a></li>
                <li><a href=''>育兒</a></li>
            </ul>
        </nav>
    </div>
    <div class="box2">
    </div>
@endsection
