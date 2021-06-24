@extends('layouts.app')
@section('title', '登入')
@section('content')
    <link rel="stylesheet" href="{{ asset("css/login.css") }}">
    <h1 class="title">{{ config('app.name', 'Laravel') }}</h1>
    <div class="box">
        <div class="window">
            @error('message')
            <div class="error">{{ $errors->first('message') }}</div>
            @enderror
            <form action="{{ route('auth.login') }}" method="post">
                @csrf
                <div class="form-input">
                    <label for="email">信箱</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                           required autocomplete="email" autofocus>
                </div>
                <div class="form-input">
                    <label for="password">密碼</label>
                    <input type="password" id="password" name="password" required autocomplete="current-password">
                </div>
                <div class="form-action">
                    <button type="submit">登入</button>
                    @if(\Illuminate\Support\Facades\Route::has('auth.register'))
                        <button type="button" onclick="javascript:location.href='{{ route('auth.register') }}'">註冊
                        </button>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection
