@extends('layout.adminlayout')
@section('title', 'Details')
@section('page-heading')
    <h1>Welcome to Details page</h1>
    <hr>
@endsection
@section('banner')
    <h2>This is Details Page Banner.</h2>
@endsection
@section('main')
    <h3>This is Details Page Mian Content.</h3>
@endsection
{{-- @section('content-details')
    <h3>This is Details Page Text</h3>
@endsection --}}

@section('content-details')
    <h3>This is Details Page Text</h3>
    @parent
@endsection
