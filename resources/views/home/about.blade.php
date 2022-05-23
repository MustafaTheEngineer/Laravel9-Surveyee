@extends('layouts.frontbase')

@section('title', 'About Us - '.$setting->title)
@section('keywords',$setting->keywords)
@section('description',$setting->description)

@section('content')
    <h1 class="mt-5 pt-5 d-flex justify-content-center">About Us</h1>

    <div class="container mt-5">
        {!! $setting->aboutus !!}
    </div>
@endsection
