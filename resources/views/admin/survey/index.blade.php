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
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

    <!-- Main CSS-->
    <link href="{{asset('adminAssets')}}/css/theme.css" rel="stylesheet" media="all">
@endsection

@section('title','Survey List')

@section('content')
    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">
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
                                        <a href="#">Admin</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Survey</li>
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
                    <div class="col-md-12 d-flex">
                        <h1 class="title-4">Survey List
                        </h1>
                        <a href="{{route('admin.survey.create')}}" class="btn btn-secondary ml-5">Add Survey</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END WELCOME-->

        <!--START TABLE -->
        <div class="container">
            <div class="row m-t-30">
            <div class="col-md-12">
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>CATEGORY</th>
                                <th>TITLE</th>
                                <th>NUMBER OF ATTENDANCES</th>
                                <th>IMAGE</th>
                                <th>STATUS</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                                <th>SHOW</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($item->category, $item->category->title)}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->complete_number}}</td>
                                <td style="max-width: 155px; overflow: hidden;">
                                    @if ($item->image)
                                        <img src="{{Storage::url($item->image)}}" style="max-width: 100px;" alt="{{$item->image}}">
                                    @endif
                                </td>
                                @if ($item->status == 'True')
                                    <td class="process">{{$item->status}}</td>
                                @else
                                    <td class="denied">{{$item->status}}</td>
                                @endif
                                <td><a href="{{route('admin.survey.edit',['id'=>$item->id])}}" class="btn btn-warning">Edit</a></td>
                                <td><a href="{{route('admin.survey.destroy',['id'=>$item->id])}}" class="btn btn-danger" id="delete">Delete</a></td>
                                <td><a href="{{route('admin.survey.show',['id'=>$item->id])}}" class="btn btn-primary">Show</a></td>
                            </tr>
                            @endforeach

                            
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE-->
            </div>
        </div>
        </div>
        <!--END TABLE -->
    </div>
@endsection

@section('js')
    <!-- Jquery JS-->
    <script>
        var del = document.getElementById('delete');
        del.addEventListener('click',function(e){
            e.preventDefault();
        });
    </script>
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