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

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('title','Edit Survey')

@section('content')
    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7 mb-5">
        <!-- BREADCRUMB-->
        <section class="au-breadcrumb2">
            <div class="container">
                <div class="row mx-5">
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
                                    <li class="list-inline-item">Edit Survey</li>
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
                <div class="row mx-5">
                    <div class="col-md-12">
                        <h1 class="title-4">Edit: {{$data->question}}
                        </h1>
                        <hr class="line-seprate">
                    </div>
                </div>
            </div>
        </section>
        <!-- END WELCOME-->

        <!-- START FORM -->
        <div class="container">
            <div class="card mx-5 my-3">
                <div class="card-header">
                    <strong>Survey Elements</strong>
                </div>
                <form action="{{route('admin.question.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="card-body card-block">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label" style="font-weight:700;">Question</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea name="question" id="question" placeholder="Question" class="form-control">{{
                                    $data->question}}</textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="option1" class=" form-control-label">Option 1</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="option1" name="option1" value="{{$data->option1}}" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="option2" class=" form-control-label">Option 2</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="option2" name="option2" value="{{$data->option2}}" class="form-control">
                            </div>
                        </div>
                        @if ($data->option3)
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="option3" class=" form-control-label">Option 3</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="option3" name="option3" value="{{$data->option3}}" class="form-control">
                                </div>
                            </div>
                        @endif

                        @if ($data->option4)
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="option4" class=" form-control-label">Option 4</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="option4" name="option4" value="{{$data->option4}}" class="form-control">
                                </div>
                            </div>
                        @endif

                        @if ($data->option5)
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="option5" class=" form-control-label">Option 5</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="option5" name="option5" value="{{$data->option5}}" class="form-control">
                                </div>
                            </div>
                        @endif
                        
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Status</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="status" id="select" class="form-control">
                                    <option value="{{$data->status}}" selected>{{$data->status}}</option>
                                    <option value="True">True</option>
                                    <option value="False">False</option>
                                </select>
                            </div>
                        </div>

                        <button type="button" id="addOp" class="btn btn-primary">Add Option</button>
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


    <script>
        var addOptionBtn = document.getElementById("addOp");
        addOptionBtn.addEventListener("click",function(){
            const option = this.previousElementSibling.previousElementSibling.querySelector("input").id[6];
            const button = this;
            console.log(option);
            if (parseInt(option) + 1 < 6) {
                addOption(button,parseInt(option) + 1);
            }
            
        });
        function addOption(button,option){
            const formGroup = document.createElement("div");
            formGroup.classList.add("row");
            formGroup.classList.add("form-group");
            button.parentElement.insertBefore(formGroup,button.previousElementSibling);
            formGroup.innerHTML = `
                            <div class="col col-md-3">
                                <label for="${"option" + option}" class=" form-control-label">Option ${option}</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="${"option" + option}" name="${"option" + option}" placeholder="Option ${option}" class="form-control">
                            </div>
            `
        }
    </script>
@endsection
