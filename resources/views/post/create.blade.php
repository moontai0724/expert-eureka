@extends('layouts.app')
@section('title', '新增文章')
@section('content')
    <link rel="stylesheet" href="{{ asset("css/released.css") }}">


    <div class="box">
        <div class="window">
            個人基本資料

            <button type="submit">發表文章</button>
            <div class="box1"><a href='{{ route('auth.login') }}'>發表到哪個版面</a></div>
        </div>



    </div>

@endsection
