@extends('exercise.InheritanceLayout.layout')
@section('title', 'Home')

@section('content')
    <h1>Home Page</h1>
    <hr>
@endsection

@section('banners')
    <h3>Home Page Banners Content</h3>
    <hr>
@endsection

@section('description')
    @parent
    <p>This is default text from Home Page layout.</p>
@show

@section('main-content')
    <h4>Home Page Main Content</h4>
    <ul>
        <li>Services 😃</li>
        <li>Subscription 😅</li>
        <li>Contact 🎛️</li>
    </ul>
@endsection
