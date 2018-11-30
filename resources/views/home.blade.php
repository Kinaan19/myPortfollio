@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

<body>
    @include('partials/homePage') 
    @include('partials/about')
    @include('partials/service') 
    @include('partials/contact') 
    @include('partials/footer')

    <script src="js/app.js"></script>
</body>


@stop