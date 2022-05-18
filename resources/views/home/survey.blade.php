@extends('layouts.frontbase')

@section('title','Surveyee')

@section('head')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- SEO Meta Tags -->
<meta name="description" content="Your description">
<meta name="author" content="Your name">

<!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
<meta property="og:site_name" content="" /> <!-- website name -->
<meta property="og:site" content="" /> <!-- website link -->
<meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

<!-- Styles -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
    rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

<link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/css/fontawesome-all.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/css/swiper.css" rel="stylesheet">
<link href="{{asset('assets')}}/css/styles.css" rel="stylesheet">
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

@section('js')
<!-- Scripts -->
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
<script src="{{asset('assets')}}/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
<script src="{{asset('assets')}}/js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
<script src="{{asset('assets')}}/js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
<script src="{{asset('assets')}}/js/scripts.js"></script> <!-- Custom scripts -->
@endsection

@section('content')
<div class="container">
    <div class="d-flex justify-content-center" style="margin: 150px 0; flex-direction:column;">
        <div class="d-flex align-items-center" style="flex-direction:column;">
            <img class="img-fluid" src="{{Storage::url($data->image)}}" alt="alternative" style="max-height: 400px;">
            <p class="h1 my-3"><strong>{{$data->title}}</strong></p>
        </div>
        <div class="d-flex align-items-center" style="flex-direction: column;">
            <button class="btn btn-primary btn-lg">
                FILL
            </button>
            <p class="mt-5 d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-clipboard-check-fill" viewBox="0 0 16 16"> 
                    <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1Zm6.854 7.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708Z"/>
                  </svg>

                  <strong class="h3 ms-3">{{$data->complete_number}}</strong>

                  <a href="" class="text-decoration-none d-flex ms-5 px-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                        <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                    </svg>

                    <strong class="h3 ms-3">{{$data->complete_number}}</strong>
                </a>
            </p>
         
                
        </div>
        <div class="my-5">
            <div>
                <p class="h3">{{$data->description}}</p>
                {!! $data->detail !!}
            </div>
        </div>
    </div>
</div>
@endsection
