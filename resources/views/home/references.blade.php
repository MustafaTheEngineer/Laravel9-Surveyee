@extends('layouts.frontbase')

@section('title', 'References - '.$setting->title)
@section('keywords',$setting->keywords)
@section('description',$setting->description)

@section('content')
    <h1 class="mt-5 pt-5 d-flex justify-content-center">References</h1>

    <div class="container mt-5">
        {!! $setting->references !!}
    </div>
@endsection