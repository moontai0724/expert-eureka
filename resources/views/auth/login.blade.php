@extends('layouts.app')
@section('title', '登入')
@section('content')
    <link rel="stylesheet" href="{{ asset("css/auth.css") }}">
    <div class="box">
        <div class="window">
            @if ($errors->any())
                <div class="error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('message'))
                <div class="success">{{ session('message') }}</div>
            @endif
            <form action="{{ route('auth.login') }}" method="post">
                @csrf
                <table>
                    <tr class="form-input">
                        <td class="form-input-label">
                            <label for="email">信箱</label>
                        </td>
                        <td>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                   required autocomplete="email" autofocus>
                        </td>
                    </tr>
                    <tr class="form-input">
                        <td class="form-input-label">
                            <label for="password">密碼</label>
                        </td>
                        <td>
                            <input type="password" id="password" name="password"
                                   required autocomplete="current-password">
                        </td>
                    </tr>
                </table>
                <div class="form-action">
                    <button type="submit">登入</button>
                    <button type="button" onclick="javascript:location.href='{{ route('auth.register') }}'">註冊</button>
                </div>
            </form>
        </div>
    </div>
@endsection
