@extends('layouts.layout')

@section('title')
Точки маршрутов {{$post->title}}
@endsection

@section('menu')
     <li><a href="{{ route('home')}}">О проекте</a></li>
     <li><a href="{{ route('posts')}}">Путешествия</a></li>
     <li><a href="{{ route('posts.all') }}" class="current">Точки маршрутов</a></li>
     <li><a href="{{ route('contacts')}}">Обратная свзяь</a></li>
@endsection

@section('content')
<div class="container">
    <div class="post">
      <div class="post-content">
        <div class="post-header">
          <h1>
            <a href="{{ route('posts', ['slug' => $post->slug])}}"> {{$post->title}}</a>
          </h1>
          <div class="post-meta">
            <span class="views">{{ $post->views }} views</span>
            <time datetime="2019-04-01">{{ $post->getPostDate() }}</time>
            @if ($post->tags->count())
              @foreach ($post->tags as $tag)
            <span class="tags">{{ $tag->title }}</span>
              @endforeach
            @endif
            <span class="category">{{ $post->category->title }}</span>
          </div>
        </div>
        <p>
          {!! $post->content !!}
        </p>
      </div>
    </div>
  </div>
  <link rel="stylesheet" type="text/css" href="{{ asset('public\assets\user\styles/points.css')}}" />
@endsection