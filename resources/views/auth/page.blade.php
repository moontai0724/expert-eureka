@extends('layouts.app')
@section('title', 'YOUSAY')
@section('content')
    <link rel="stylesheet" href="{{ asset("css/page.css") }}">

    <div class="box"><a href=''>發表文章</a></div> <div class="box1"><a href=''>關注</a></div>
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
@endsection
