@extends('layouts.app')

@section('css')
    <meta http-equiv="refresh" content="2; url={{ route('home') }}" />
@endsection

@section('content')
<div class="container" style="text-align: center">
        <p style="font-size:32px; font-weight: bold;">{{ $mensaje }}</p>
        <p style="font-size: 24;">A continuación será redirigido...</p>
    </div>
@endsection