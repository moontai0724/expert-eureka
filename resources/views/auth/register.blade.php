@extends('layouts.app')
@section('title', '註冊')
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
            <form action="{{ route('auth.register') }}" method="post">
                @csrf
                <table class="form-table">
                    <tr class="form-input">
                        <td class="form-input-label">
                            <label for="name">姓名</label>
                        </td>
                        <td>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                   required autocomplete="name" autofocus>
                        </td>
                    </tr>
                    <tr class="form-input">
                        <td class="form-input-label">
                            <label for="email">信箱</label>
                        </td>
                        <td>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                   required autocomplete="email">
                        </td>
                    </tr>
                    <tr class="form-input">
                        <td class="form-input-label">
                            <label for="password">密碼</label>
                        </td>
                        <td>
                            <input type="password" id="password" name="password" required autocomplete="new-password">
                        </td>
                    </tr>
                    <tr class="form-input">
                        <td class="form-input-label">
                            <label for="password_confirmation">確認密碼</label>
                        </td>
                        <td>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                   required autocomplete="new-password">
                        </td>
                    </tr>
                </table>
                <div class="form-action">
                    <button type="submit">註冊</button>
                    <button type="button" onclick="javascript:location.href='{{ route('auth.login') }}'">登入</button>
                </div>
            </form>
        </div>
    </div>
@endsection
