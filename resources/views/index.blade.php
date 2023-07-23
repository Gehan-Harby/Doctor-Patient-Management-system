@extends('main_templet')

@section('css')
<link rel="styleesheet" href="css/style.css">
@endsection

@section('main')
<img class="banner" src="/images/welcome.png" alt="Logo">
<h1> Doctor-Patient Management System</h1>
<h2>The way to Management Easily</h2>
<button class="btn btn-big btn-primary" onclick="window.location.href='/register'">Start up!</button>
@endsection