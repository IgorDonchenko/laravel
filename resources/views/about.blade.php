@extends('layout.app')

@section('content')
<h1>Страница About</h1>
@endsection

@section('title-block')
    Страница About
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection
