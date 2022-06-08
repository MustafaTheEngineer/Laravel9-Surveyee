@extends('layouts.frontbase')

@section('title','User Panel')

@section('content')
    <div class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-2">
                <h4>User Menu</h3>
                @include('home.user.usermenu')
            </div>
            <div class="col-10">
                @include('profile.show')
            </div>
        </div>
    </div>
@endsection

