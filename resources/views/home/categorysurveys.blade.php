@extends('layouts.frontbase')

@section('title', $category->title.' - Surveys')

@section('content')
<div id="services" class="cards-1">
    <div class="container">
        <div class="row">
            @foreach ($surveys as $key => $item)
                @if ($key % 3 == 0 and $key != 0)
                    </div>
                @endif

                @if ($key % 3 == 0)
                    <div class="col-lg-12">
                @endif
                        
                <!-- Card -->
                <div class="card">
                        <div class="card-img-sec" style="">
                            <img src="{{Storage::url($item->image)}}" alt="" style="width: 100%; height: 150px; display: block; object-fit:cover;">
                        </div>
                        <div class="card-body mt-4">
                            <h5 class="card-title">{{$item->title}}</h5>
                            <p>{{$item->description}}</p>
                            <div class="d-flex align-items-center" style="flex-direction: column;">
                                <a class="btn btn-primary btn-lg" href="{{route('survey',['id' => $item->id])}}">
                                    FILL
                                </a>
                                <p class="mt-5 d-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-clipboard-check-fill" viewBox="0 0 16 16"> 
                                        <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1Zm6.854 7.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708Z"/>
                                      </svg>
                    
                                      <strong class="h3 ms-3">{{$item->complete_number}}</strong>
                    
                                      <a href="" class="text-decoration-none d-flex ms-5 px-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#F7D72C" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <strong class="h3 ms-3">{{$item->comment->avg('rate')}}</strong>
                                    </a>
                                </p>
                            </div>
                        </div>
                </div>
                <!-- end of card -->
            @endforeach
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div>
    
@endsection