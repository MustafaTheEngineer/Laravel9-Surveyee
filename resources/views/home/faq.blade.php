@extends('layouts.frontbase')

@section('title','Frequently Asked Questions')
@section('keywords',$setting->keywords)
@section('description',$setting->description)

@section('head')
    <style>
        .carousel img{
            object-fit: cover;
        }

        .carousel-caption{
            top: 500px;
            padding: 0;
        }
    </style>
    <!-- Favicon  -->
    <link rel="icon" href="{{asset('asset')}}/images/favicon.png">
@endsection


@section('content')
<div class="" style="margin: 150px 0 75px 0;">
    <div class="d-flex justify-content-center">
        <h1>
            Frequently Asked Questions
        </h1>
    </div>
</div>

<div class="container mb-5">
    <div class="accordion" id="accordionExample">
        @foreach ($datalist as $item)
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{"q-".$item->id}}" aria-expanded="true" aria-controls="{{"q-".$item->id}}">
                    {{$item->question}}
                </button>
                </h2>
                <div id="{{"q-".$item->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    {!! $item->answer !!}
                </div>
                </div>
            </div>
        @endforeach
        
      </div>

</div>
@endsection
