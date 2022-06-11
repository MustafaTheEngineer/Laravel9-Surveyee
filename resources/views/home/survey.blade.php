@extends('layouts.frontbase')

@section('title','Surveyee')

@section('head')
    <style>
        .carousel img{
            object-fit: cover;
        }

        .carousel-caption{
            top: 500px;
            padding: 0;
        }

        button[data-dismiss^="alert"]:hover{
            background-color: #0D6EFD;
        }
    </style>
    <!-- Favicon  -->
    <link rel="icon" href="{{asset('asset')}}/images/favicon.png">
@endsection


@section('content')

<div class="d-flex justify-content-center" style="margin: 75px 0;">
    @include('home.messages')
</div>

<div class="container">
    <div class="d-flex justify-content-center" style="flex-direction:column;">
        <div class="d-flex align-items-center" style="flex-direction:column;">
            <img class="img-fluid" src="{{Storage::url($data->image)}}" alt="alternative" style="max-height: 400px;">
            <p class="h1 my-3"><strong>{{$data->title}}</strong></p>
        </div>
        <div class="d-flex align-items-center" style="flex-direction: column;">
            <a class="btn btn-primary btn-lg" href="{{route('userpanel.fillsurvey',['id' => $data->id, 'order' => 0])}}">
                FILL
            </a>
            <div class="mt-5 d-flex justify-content-center">
                <div class="d-flex me-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-clipboard-check-fill" viewBox="0 0 16 16"> 
                        <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1Zm6.854 7.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708Z"/>
                    </svg>

                    <strong class="h3 ms-3">{{$data->complete_number}}</strong>
                </div>

                <div href="" class="d-flex ms-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                      </svg>

                    <strong class="h3 ms-3">{{number_format( $data->comment->average('rate'),1) }}</strong>
                </div>
            </div>
        </div>

        <div class="my-5">
            <div>
                <p class="h3">{{$data->description}}</p>
                {!! $data->detail !!}
            </div>
        </div>
    </div>

    <div id="comment" class="my-5">
        <form action="{{route('storecomment')}}" method="post">
        @csrf
            <div class="form-group">
                <input type="hidden" class="form-control-input" value="{{$data->id}}" name="survey_id">
            </div>
            <div class="form-group">
                @auth
                    <span>{{Auth::user()->name}}</span>
                @endauth
                
            </div>
            <div class="form-group">
                <input type="text" class="form-control-input" placeholder="Subject" name="subject" required style="font-weight: 700;">
            </div>
            <div class="form-group">
                <textarea class="form-control-textarea" placeholder="Message" name="review" required></textarea>
            </div>
            <div class="form-group my-5">
                <div class="input-rating">
                    <strong>Your Rating: </strong>
                    <div class="stars">
                        <ul class="list-unstyled d-flex">
                            <li class="mx-2">
                                <input type="radio" name="rate" value="1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#F7D72C" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                            </li>
                            <li class="mx-2">
                                <input type="radio" name="rate" value="2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                            </li>
                            <li class="mx-2">
                                <input type="radio" name="rate" value="3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                            </li>
                            <li class="mx-2">
                                <input type="radio" name="rate" value="4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                            </li>
                            <li class="mx-2">
                                <input type="radio" name="rate" value="5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="form-group">
                @auth
                    <button type="submit" class="form-control-submit-button mb-5">Send</button>
                @else
                    <a href="/login" target="_blank" class="primary-btn form-control-submit-button text-center text-decoration-none pt-4 mb-5" style="background-color: #aeaeae">For submit your review, please log in</a>
                @endauth
                
            </div>
        </form>
    </div>

    <div class="comment-section">
        @foreach ($reviews as $item)
            <ul class="mb-5 list-unstyled">
                <li class="mb-3">
                    <p class="username">
                        {{$item->user->name}}
                    </p>
                    <div class="star-date d-flex justify-content-start">
                        <div class="comment-section-stars">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $item->rate)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#F7D72C" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#5E6576" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                @endif
                            @endfor
                        </div>
                        <div class="comment-section-dates" style="margin-left: auto;">
                            {{$item->created_at}}
                        </div>
                    </div>
                    
                </li>
                <li class="mb-3">{{$item->subject}}</li>
                <li class="mb-3">{{$item->review}}</li>
            </ul>
        @endforeach
    </div>
</div>

<script>
    const comment = document.getElementById("comment");
    const starInput = comment.querySelectorAll(".stars ul li input");
    const starSvg = comment.getElementsByTagName("svg");
    var limit = 1;

    starInput[0].checked = true;

    starInput.forEach(function(element){
        element.addEventListener("click",function(){
            limit = Number(this.value);

            for (var i = 0; i < limit; i++) {
                starSvg[i].style.fill = "#F7D72C";
            }

            for (; i < 5; i++) {
                starSvg[i].style.fill = "#5E6576";
            }
        });
    });
    
</script>
@endsection
