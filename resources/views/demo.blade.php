@extends('app')

@section('title', 'Page Demo Title')

@section('content')
    Содержимое станицы Demo
@endsection


@section('sidebar')
    @parent
    <p>Переопределенное demo содержимое боковой панели</p>

    
@endsection