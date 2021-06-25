<article class="post @if($id != null) clickable" onclick="javascript:location.href='{{ route('detail', ['post' => $id]) }}'@endif">
    <aside>
        <img src="{{ asset("img/avatar.png") }}" alt="avatar">
    </aside>
    <main>
        @if($title != null)
            <h2 class="post-title">{{ $title }}</h2>
        @endif
        <div class="post-content">{{ $content }}</div>
    </main>
</article>
