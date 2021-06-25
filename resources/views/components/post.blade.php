<article class="post">
    <aside class="clickable" onclick="javascript:location.href='{{ route('user', ['user' => $userId]) }}'"
           title="查看使用者文章">
        <img src="{{ asset("img/avatar.png") }}" alt="avatar">
    </aside>
    <main @if($id != null) title="查看文章與相關回應" class="clickable"
          onclick="javascript:location.href='{{ route('detail', ['post' => $id]) }}'"@endif>
        @if($title != null)
            <h2 class="post-title">{{ $title }}</h2>
        @endif
        <div class="post-content">{{ $content }}</div>
    </main>
</article>
