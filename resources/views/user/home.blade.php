@extends('layouts.app')
@section('title', '主頁')
@section('content')
    <link rel="stylesheet" href="{{ asset("css/edit.css") }}">
    <div class="box">
        <div class="box1"><a href=''>編輯個人資料</a></div>

    </div>

    <div class="box">
        <div class="window">
            個人基本資料

        </div>

    </div>
    <div class="box">
        <div class="window">
        發表過的文章

        </div>

    </div>
@endsection
