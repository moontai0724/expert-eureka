<article class="post">
    <aside class="clickable" onclick="javascript:location.href='{{ route('user', ['user' => $userId]) }}'">
        <img src="{{ asset("img/avatar.png") }}" alt="avatar">
    </aside>
    <main @if($id != null) class="clickable" onclick="javascript:location.href='{{ route('detail', ['post' => $id]) }}'"@endif>
        @if($title != null)
            <h2 class="post-title">{{ $title }}</h2>
        @endif
        <div class="post-content">{{ $content }}</div>
    </main>
</article>
