@extends('layouts.appmain')
@include('inc.navbar')

 <!-- social meta -->
 <meta property="og:url" content="{{('post->metaUrl')}}">
    <meta property="og:title" content="{{('post->metaTitle')}}">
    <meta property="og:description" content="{{('post->metaDescription')}}">
    <meta property="og:image" content="{{('post->metaThumbnail')}}">
    <meta property="article:author" content="{{('post->metaAuthor')}}">

@section('content')
<div class="fb-like" data-href="https://nassiff.dev/article_detail?article_id=1&amp;url=article_detail" data-width="" data-layout="" data-action="" data-size="" data-share="true"></div>
<div class="container">
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
