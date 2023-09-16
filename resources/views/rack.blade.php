@extends('layouts.appmain')

@include('inc.navbar')

@section('content')
<section class="items">
    <h1 style="margin-top: 50px;" class="bighead"><span class="dim">/</span>rack.</h1>
    <p class="sub-heading">Explore articles I have written.</p>

    @foreach ($articles as $article)
    <article class="blog">
        <div class="date">{{ $article->date }}</div>
        <h2 class="heading">
            <a style="color: #5605a1;" href="{{ route('articleDetail', ['article_id' => $article->id, 'url' => $article->url]) }}">
                {{ $article->title }}
            </a>
        </h2>
        <p class="writeup">
            {{ $article->description }} <br>
            <br>
            <a class="button" href="{{ route('trackClick', ['article_id' => $article->id]) }}" data-article-id="{{ $article->id }}" style="background-color: #5605a1; color: white; padding: 10px; border-radius: 10px;">Read more</a>
            <i class="fa-solid fa-eye"></i>
            <span class="click-count" id="click-count-{{ $article->id }}">{{ $article->clicks }}</span>
        </p>
    </article>
    <div class="divid"></div>
    @endforeach
</section>
@endsection
