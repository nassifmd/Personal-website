@extends('layouts.appmain')
@include('inc.navbar')


@section('content')
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4892079728515636"
     crossorigin="anonymous"></script>
<!-- Your share button code -->
<div class="container">
<div class="fb-like" data-href="https://nassiff.dev/article_detail" data-width="" data-layout="" data-action="" data-size="" data-share="true"></div>
    <ul>
        @foreach($posts as $post)
            <h1>{{ $post->title }}</h1>
            @if($post->cover_image)
                <img class="cover_img" src="{{ $post->cover_image }}" alt="Cover Image">
            @endif
            <p>{{ $post->content }}</p>
            <p>{{ $post->paragraph1 }}</p>
            <p>{{ $post->paragraph2 }}</p>
            <p>{{ $post->paragraph3 }}</p>
            <p>{{ $post->paragraph4 }}</p>
            
            @if($post->article_image)
                <img class="article_img" src="{{ $post->article_image }}" alt="Article Image">
            @endif
            @if($post->youtube_link)
                <iframe width="560" height="315" src="{{ $post->youtube_link }}" frameborder="0" allowfullscreen></iframe>
            @endif
            @if($post->date)
                <p>Date: {{ $post->date }}</p>
            @endif

            
            <!-- Add social media links and icons -->
            <div class="social-media-icons">
                <a href="https://web.facebook.com/nassifd" target="_blank"><i class="fa-brands fa-square-facebook fa-bounce fa-2xl" style="color: #005af5;"></i>
                </a>
                <a href="https://www.linkedin.com/in/nassif-dauda/" target="_blank"><i class="fa-brands fa-linkedin fa-bounce fa-2xl" style="color: #194694;"></i>
                </a>
                <a href="https://twitter.com/nassifdev" target="_blank"><i class="fa-brands fa-square-twitter fa-bounce fa-2xl" style="color: #3878e5;"></i>
                </a>
            </div>
        @endforeach
    </ul>
</div>

@endsection
