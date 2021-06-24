@extends('layouts.app')
@section('title', '文章')
@section('content')
    <link rel="stylesheet" href="{{ asset("css/browse.css") }}">


    <div class="box2">
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
    <div class="box3">
    </div>
    <div class="box4">
    </div>
@endsection
