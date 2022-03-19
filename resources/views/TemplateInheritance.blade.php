@extends('layout.adminlayout')
@section('title', 'Inheritance')
@section('page-heading')
    <h1>Welcome to Inheritance page</h1>
    <hr>
@endsection

@section('banner')
    <h2>This is Inheritance Page Banner.</h2>
@endsection
@section('main')
    <h3>This is Inheritance Page Mian Content.</h3>
@endsection

{{-- @section('content-details')
    <h3>This is Inheritance Page Text</h3>
@endsection --}}
@section('content-details')
    <h3>This is Inheritance Page Text</h3>
    @parent
@endsection
