@extends('layout.main')
@section('title','Post - BlogInLaravel')
@section('content')

    <!--  Header Image-->

        <header class="masthead" style="background-image:url({{asset('post_header_image/'.$posts->filename)}})">
            <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 mx-auto">
                            <div class="site-heading">
                                <h2>{{$posts->title}}</h2>
                                     {{-- <span class="subheading">A Blog Theme by Start Bootstrap</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
        </header>

    <!-- Post Content -->
        
        <article>
            <div class="container">
                    <a href="/posts" class="btn btn-info "><i class="fas fa-chevron-left"></i> Go Back</a>

                <div class="row">
                            <div class="col-lg-8 col-md-10 mx-auto">
                                <div class="post-preview">
                                        <h2 class="post-title">
                                            {{$posts->title}}
                                        </h2>
                                        <p class="post-subtitle">
                                        {{$posts->body}}
                                        </p>
                                    </a>
                                    <p class="post-meta">Posted by
                                        <a href="/pages/post">Start Bootstrap</a>
                                        {{$posts->created_at}}</p>
                                </div>
                            </div>
                </div>
            </div>
        </article>

@endsection