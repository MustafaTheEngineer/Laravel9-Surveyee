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
                                    <li class="list-inline-item">Dashboard</li>
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
                        <h1 class="title-4">Add Category
                        </h1>
                        <hr class="line-seprate">
                    </div>
                </div>
            </div>
        </section>
        <!-- END WELCOME-->

        <!-- START FORM -->
        <div class="container-fluid">
            <div class="card mx-5">
                <div class="card-header">
                    <strong>Category Elements</strong>
                </div>
                <form action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="card-body card-block">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="">Parent Category</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select class="form-control select2" name="parent_id" id="">
                                    <option value="0" selected>Main Category</option>
                                    @foreach ($data as $rs)
                                        <option value="{{$rs->id}}">
                                            {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Title</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="title" placeholder="Text" class="form-control">
                                <small class="form-text text-muted">Enter the title of category</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Keywords</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="keywords" placeholder="Keywords" class="form-control">
                                <small class="form-text text-muted">Keywords for explanation</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Description</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="description" placeholder="Description" class="form-control">
                                <small class="form-text text-muted">Description of category</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="file-input" class=" form-control-label">File input</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="file" id="file-input" name="image" class="form-control-file">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Status</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="status" id="select" class="form-control">
                                    <option value="True">True</option>
                                    <option value="False">False</option>
                                </select>
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>
            </form>
            </div>
        </div>
        <!-- END FORM -->
    </div>
@endsection

@section('js')
    <!-- Jquery JS-->
    <script src="{{asset('adminAssets')}}/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('adminAssets')}}/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="{{asset('adminAssets')}}/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('adminAssets')}}/vendor/slick/slick.min.js">
    </script>
    <script src="{{asset('adminAssets')}}/vendor/wow/wow.min.js"></script>
    <script src="{{asset('adminAssets')}}/vendor/animsition/animsition.min.js"></script>
    <script src="{{asset('adminAssets')}}/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="{{asset('adminAssets')}}/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="{{asset('adminAssets')}}/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="{{asset('adminAssets')}}/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{asset('adminAssets')}}/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{asset('adminAssets')}}/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="{{asset('adminAssets')}}/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="{{asset('adminAssets')}}/js/main.js"></script>
@endsection