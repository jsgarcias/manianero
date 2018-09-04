@extends('layouts.app')

@section('css')
    <!-- include custom css -->
    <link href="{{ asset('css/leer.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <p style="font-size:40px; font-weight: bold;">{{ $noticia->title }}</p>
        <p><img src="{{ asset("storage/" . $noticia->image)}}" /></p>
        <p>{!!html_entity_decode($noticia->body)!!}</p>
        @if (Auth::check())
        <form action="{{ route('del_noticia', ['id' => $id]) }}" method="get">
            {!! csrf_field() !!}
            <input type="submit" value="Eliminar">
        </form>
        <p><a href="">Editar</a></p>
        @endif
    </div>
    @endsection