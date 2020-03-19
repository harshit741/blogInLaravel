@foreach($posts as $post)
<div class="post-preview">
    <a href="/posts/{{$post->id}}">
        <h2 class="post-title">
            {{$post->title}}
        </h2>
        <h3 class="post-subtitle">
            {!! $post->body !!}
        </h3>
    </a>
    <p class="post-meta">Posted by
            <a href="/pages/post">{{ $post->author }}</a>&nbsp;at {{$post->created_at}}
                &nbsp; &nbsp;
                Category: 
                <a href="/category/{{$post->category}}">{{$post->category}}</a>
    </p>
</div>
<hr>
@endforeach