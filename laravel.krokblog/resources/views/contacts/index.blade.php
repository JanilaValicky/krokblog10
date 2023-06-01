@extends('layouts.layout')

@section('title')
Обратная свзяь
@endsection

@section('menu')
     <li><a href="{{ route('home')}}">О проекте</a></li>
     <li><a href="{{ route('posts')}}">Путешествия</a></li>
     <li><a href="{{ route('posts.all') }}">Точки маршрутов</a></li>
     <li><a class="current">Обратная свзяь</a></li>
@endsection

@section('content')
<div class="content1">
  <div class="container">
    <div class="content">
      <div class="image-box">
        <img src="{{ asset('public\assets\user\photo\contact.png')}}" alt="contact" />
      </div>
      <form action="/contacts" method="POST">
        @csrf
        <div class="topic">Отправьте нам ваш вопрос!</div>
        <div class="input-box">
          <input type="text" name="name" id="name" required />
          <label for="name">Введите ваше имя</label>
        </div>
        <div class="input-box">
          <input type="email" name="email" id="email" required />
          <label for="email">Введите вашу почту</label>
        </div>
        <div class="message-box">
          <textarea name="message" id="message" required></textarea>
          <label for="message">Введите ваш вопрос</label>
        </div>
        <div class="input-box">
          <input type="submit" value="Отправить!" />
        </div>
      </form>
    </div>
  </div>
</div>
  <link rel="stylesheet" href="{{ asset('public\assets\user\styles\contanct.css') }}" />
@endsection

