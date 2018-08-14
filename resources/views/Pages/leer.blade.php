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
    </div>
@endsection