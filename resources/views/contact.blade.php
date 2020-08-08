@extends('layout.app')

@section('content')
    <h1>Страница Contact</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('contact-form')  }}" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Имя">
        <input type="text" name="email" id="email" placeholder="Майл">
        <input type="text" name="subject" id="subject" placeholder="Тема">
        <textarea name="message" id="message" placeholder="Текст"></textarea>
        <button type="submit">Отправить</button>
    </form>

@endsection

@section('title-block')
    Страница Contact
@endsection

