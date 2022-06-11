@extends('layouts.adminbase')

@section('head')
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Fontfaces CSS-->
    <link href="{{asset('adminAssets')}}/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{asset('adminAssets')}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{asset('adminAssets')}}/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{asset('adminAssets')}}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('adminAssets')}}/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('adminAssets')}}/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{asset('adminAssets')}}/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{asset('adminAssets')}}/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{asset('adminAssets')}}/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{asset('adminAssets')}}/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{asset('adminAssets')}}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('adminAssets')}}/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('adminAssets')}}/css/theme.css" rel="stylesheet" media="all">
@endsection

@section('title','Add Category')

@section('content')
    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7 mb-5">
        <!-- BREADCRUMB-->
        <section class="au-breadcrumb2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb-content">
                            <div class="au-breadcrumb-left">
                                <span class="au-breadcrumb-span">You are here:</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item active">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Show Survey</li>
                                </ul>
                            </div>
                            <form class="au-form-icon--sm" action="" method="post">
                                <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
                                <button class="au-btn--submit2" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB-->

        <!-- WELCOME-->
        <section class="welcome p-t-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title-4">Show: {{$data->title}}
                        </h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- END WELCOME-->

        <!-- START FORM -->
        <div class="container my-5">
            <!-- TOP CAMPAIGN-->
            <div class="">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th class="col-xl-2">Category</th>
                                <td class="col-xl-10">
                                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category, $data->category->title)}}
                                </td>
                            </tr>
                            <tr>
                                <th class="col-xl-2">Title</th>
                                <td class="col-xl-10">{{$data->title}}</td>
                            </tr>
                            <tr>
                                <th class="col-xl-2">Keywords</th>
                                <td class="col-xl-10">{{$data->keywords}}</td>
                            </tr>
                            <tr>
                                <th class="col-xl-2">Description</th>
                                <td class="col-xl-10">{{$data->description}}</td>
                            </tr>
                            <tr>
                                <th class="col-xl-2">Image</th>
                                <td class="col-xl-10"><img style="max-width: 6rem;" src="{{Storage::url($data->image)}}" alt=""></td>
                            </tr>
                            <tr>
                                <th class="col-xl-2">Detail</th>
                                <td class="col-xl-10">{!! $data->detail !!}</td>
                            </tr>
                            <tr>
                                <th class="col-xl-2">Status</th>
                                <td class="col-xl-10">{{$data->status}}</td>
                            </tr>
                            <tr>
                                <th class="col-xl-2">Created at</th>
                                <td class="col-xl-10">{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th class="col-xl-2">Updated at</th>
                                <td class="col-xl-10">{{$data->updated_at}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--  END TOP CAMPAIGN-->
            <a href="{{route('admin.survey.edit'),['id' => $data->id]}}" class="btn btn-warning my-3">Edit</a>
            <a href="{{route('admin.survey.destroy'),['id' => $data->id]}}" class="btn btn-danger my-3">Delete</a>
        </div>
        <!-- END FORM -->
    </div>
@endsection