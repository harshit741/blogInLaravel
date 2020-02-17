@extends('layout.main')
@section('title','Post - BlogInLaravel')
@section('content')
    
<!-- Main Content -->
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <header class="container">
                <h1 class="allPost">All Posts</h1>
                <hr>
            </header>
            @if(count($posts) > 0)
                @foreach($posts as $post)
                <div class="post-preview">
                <a href="/post">
                    <h2 class="post-title">
                        {{$post->title}}
                    </h2>
                    <h3 class="post-subtitle">
                    {{$post->body}}
                    </h3>
                </a>
                <p class="post-meta">Posted by
                    <a href="#">Start Bootstrap</a>
                    {{$post->created_at}}</p>
                </div>
                <hr>
            @endforeach
            @else
                <h2>No Posts Found</h2>
            @endif
            <!-- Pager -->
            <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
        </div>
    </div>
    <hr>

@endsection
