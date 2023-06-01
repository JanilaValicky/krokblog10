@extends('layouts.layout')

@section('title')
Путешествия
@endsection

@section('menu')
     <li><a href="{{ route('home')}}">О проекте</a></li>
     <li><a class="current">Путешествия</a></li>
     <li><a href="{{ route('posts.all') }}">Точки маршрутов</a></li>
     <li><a href="{{ route('contacts')}}">Обратная свзяь</a></li>
@endsection

@section('content')
<div class="content1">
    <div class="post-wrap">
      @foreach ($posts as $post)
      <div class="post-item">
        <div class="post-item-wrap">
          <a href="{{ route('posts.single', ['slug' => $post->slug])}}" class="post-link">
            <div class="image-wrapper">
              <img 
                src="{{ $post->getImage() }}"
              />
            </div>
            <div class="text-wrapper">
              <h3 class="post-title">{{ $post->title }}</h3>
              <div class="post-cat">{{ $post->category->title }}</div>
            </div>
            <div class="overlay"></div
          ></a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <link rel="stylesheet" type="text/css" href="{{ asset('public\assets\user\styles/travels.css')}}" />
@endsection

