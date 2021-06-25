@extends('layouts.app')
@section('title', '回應文章')
@section('content')
    <link rel="stylesheet" href="{{ asset("css/post.css") }}">
    <div class="container">
        <div class="main window">
            @if ($errors->any())
                <div class="error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('respond', ['post' => $post]) }}" method="post">
                @csrf
                <input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}">
                <table class="form-table">
                    <tr class="form-input">
                        <td class="form-input-label">
                            <label for="content">內容</label>
                        </td>
                        <td>
                            <textarea id="content" name="content" rows="15" required></textarea>
                        </td>
                    </tr>
                </table>
                <div class="form-action">
                    <button type="submit">送出</button>
                </div>
            </form>
        </div>
    </div>
@endsection
