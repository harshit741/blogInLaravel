@extends('layout.main')
@section('title', $category)
@section('content')
<div class="container">
    <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <header class="container">
            <h1 class="allPost">Posts in {{$category}}</h1>
            <hr>
        </header>
        @if(count($posts) > 0)
            @include('layout.post')
        @else
            <h2>No Posts Found</h2>
        @endif
        <!-- Pager -->
        <div class="clearfix">
            {{$posts->links()}}
        </div>
    </div>
    </div>
</div>
<hr>

@endsection