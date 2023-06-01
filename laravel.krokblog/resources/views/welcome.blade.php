@extends('layouts.layout')

@section('title')
О проекте
@endsection

@section('menu')
     <li><a class="current">О проекте</a></li>
     <li><a href="{{ route('posts')}}">Путешествия</a></li>
     <li><a href="{{ route('posts.all') }}">Точки маршрутов</a></li>
     <li><a href="{{ route('contacts')}}">Обратная свзяь</a></li>
@endsection

@section('content')
<div class="content1">
    <div class="flexrows">
      <div>
        <img src="{{asset('public/assets/user/photo/logo1.png')}}" alt="logo" />
      </div>
      <div class="textcont">
        PRyvitanne и bonJOUR, дорогой друг! Тебя приветствуем мы – студенты
        Купаловского университета. ФИКИТ, JOURналистика и PR:Реклама – наш
        выбор уже случился! Мы знаем (это точно, не сомневайся), сколько
        вопросов о поступлении в университет возникает у школьников, и спешим
        сообщить – на первом курсе их становится не меньше! Как же быть?
        Сделать шаг навстречу увлекательному путешествию по студенческой
        жизни!
      </div>
    </div>
  </div>

  <div class="content2">
    <div class="c2text">
      <h2>KROK.COM предлагает</h2>
    </div>
  </div>

  <div class="content3">
    <div class="slider">
      <div class="container">
        <input type="radio" name="slider" id="item-1" />
        <input type="radio" name="slider" id="item-2" />
        <input type="radio" name="slider" id="item-3" checked />
        <div class="cards">
          <label for="item-1" id="photo-1" class="card">
            <img src="{{asset('public/assets/user/photo/photo3slider.jpg')}}" />
            <div class="textcont">
              {{-- <div class="backgroundc3">
                <h4>НОВЫЕ ВПЕЧАТЛЕНИЯ</h4>
              </div> --}}
              <p>
                Будем задавать вопросы, чтобы получать ответы. Инсайтов много
                не бывает!
              </p>
            </div>
          </label>
          <label for="item-2" id="photo-2" class="card">
            <img src="{{asset('public/assets/user/photo/photo2slider.jpg')}}" />
            <div class="textcont">
              {{-- <div class="backgroundc3">
                <h4>ДРУЖЕСКОЕ ОБЩЕНИЕ</h4>
              </div> --}}
              <p>
                Подберём нужные слова. Научиться учиться всегда пригодится!
              </p>
            </div>
          </label>
          <label for="item-3" id="photo-3" class="card">
            <img src="{{asset('public/assets/user/photo/photo1slider.jpeg')}}" />
            <div class="textcont">
              {{-- <div class="backgroundc3">
                <h4>НЕОБЫЧНЫЕ МАРШРУТЫ</h4>
              </div> --}}
              <p>
                Поделимся опытом. Точные координаты помогают найти дорогу!
              </p>
            </div>
          </label>
        </div>
      </div>
    </div>
  </div>

  <div class="content4">
    <div class="textcontent4">
      Интересно? Тогда вперёд вместе с нами!
      <br />
      <br />
      <div class="backgroundc4">
        <h4>KROK.COM. Крочым разам!</h4>
      </div>
      <br />
      Впереди нас ждёт множество открытий)
    </div>
    <a href="{{ route('posts')}}" class="shine-button"
      ><h2>НАЧАТЬ ПУТЕШЕСТВОВАТЬ!</h2></a
    >
  </div>
  <footer>
    <ul class="wrapper">
      <a href="https://www.facebook.com/">
        <li class="icon facebook">
          <img
            srcset="
              https://img.icons8.com/?size=2x&amp;id=435&amp;format=png 2x,
              https://img.icons8.com/?size=1x&amp;id=435&amp;format=png 1x
            "
            src="https://img.icons8.com/?size=2x&amp;id=435&amp;format=png 2x"
            alt="Facebook icon"
            style="
              filter: invert(81%) sepia(8%) saturate(2629%) hue-rotate(67deg)
                brightness(91%) contrast(102%);
            "
          />
          <span class="tooltip">Facebook</span>
          <span><i class="fab fa-facebook-f"></i></span>
        </li>
      </a>

      <a href="https://www.twitter.com/">
        <li class="icon twitter">
          <img
            srcset="
              https://img.icons8.com/?size=2x&amp;id=42403&amp;format=png 2x,
              https://img.icons8.com/?size=1x&amp;id=42403&amp;format=png 1x
            "
            src="https://img.icons8.com/?size=2x&amp;id=42403&amp;format=png 2x"
            alt="Твиттер icon"
            style="
              filter: invert(69%) sepia(64%) saturate(397%) hue-rotate(70deg)
                brightness(98%) contrast(92%);
            "
          />
          <span class="tooltip">twitter</span>
          <span><i class="fab fa-twitter"></i></span>
        </li>
      </a>

      <a href="https://www.instagram.com/">
        <li class="icon instagram">
          <img
            srcset="
              https://img.icons8.com/?size=2x&amp;id=42328&amp;format=png 2x,
              https://img.icons8.com/?size=1x&amp;id=42328&amp;format=png 1x
            "
            src="https://img.icons8.com/?size=2x&amp;id=42328&amp;format=png 2x"
            alt="Instagram icon"
            style="
              filter: invert(75%) sepia(52%) saturate(521%) hue-rotate(64deg)
                brightness(96%) contrast(87%);
            "
          />
          <span class="tooltip">Instagram</span>
          <span><i class="fab fa-instagram"></i></span>
        </li>
      </a>

      <a href="https://www.youtube.com/">
        <li class="icon youtube">
          <img
            srcset="
              https://img.icons8.com/?size=2x&amp;id=42493&amp;format=png 2x,
              https://img.icons8.com/?size=1x&amp;id=42493&amp;format=png 1x
            "
            src="https://img.icons8.com/?size=2x&amp;id=42493&amp;format=png 2x"
            alt="YouTube Play icon"
            style="
              filter: invert(100%) sepia(42%) saturate(3270%)
                hue-rotate(51deg) brightness(91%) contrast(90%);
            "
          />
          <span class="tooltip">YouTube</span>
          <span><i class="fab fa-youtube"></i></span>
        </li>
      </a>
    </ul>
  </footer>
  <link rel="stylesheet" type="text/css" href="{{ asset('public\assets\user\styles\footer.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('public\assets\user\styles\mainpage.css') }}" />
  <link rel="stylesheet" href="{{ asset('public\assets\user\styles\slider.css') }}" />
@endsection

