@extends('layouts.app')
@section('title', '新增文章')
@section('content')
    <link rel="stylesheet" href="{{ asset("css/post.list.css") }}">
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
            <form action="{{ route('create') }}" method="post">
                @csrf
                <table class="form-table">
                    <tr class="form-input">
                        <td class="form-input-label">
                            <label for="topic_id">類別</label>
                        </td>
                        <td>
                            <select name="topic_id" id="topic_id" required>
                                <option disabled @if($topicId == null) selected @endif value>請選擇發表類別</option>
                                @foreach($topics as $topic)
                                    <option value="{{ $topic->id }}"
                                            @if($topic->id == $topicId) selected @endif>{{ $topic->title }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr class="form-input">
                        <td class="form-input-label">
                            <label for="title">標題</label>
                        </td>
                        <td>
                            <input type="text" id="title" name="title" value="{{ old('title') }}"
                                   required autocomplete="off" autofocus maxlength="40">
                        </td>
                    </tr>
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
