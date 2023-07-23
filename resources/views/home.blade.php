@extends('main_templet')

@section('main')
@if(session('success_message'))
<p class="success">{{ session('success_message') }}</p>
@endif

<img class="imghome" src="/images/homeimg.jpeg" alt="home" >

@endsection