@extends('layouts.frontbase')

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
                        <h1 class="title-4">Edit: {{$data->title}}
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
                <form action="{{route('userpanel.updatesurvey',['id'=>$data->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="card-body card-block">

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="">Parent Category</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select class="form-control select2" name="category_id" id="">
                                @foreach ($datalist as $rs)
                                    <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected @endif>
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
                                <input type="text" id="text-input" name="title" value="{{$data->title}}" class="form-control">
                                <small class="form-text text-muted">Enter the title of survey</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Keywords</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="keywords" value="{{$data->keywords}}" class="form-control">
                                <small class="form-text text-muted">Keywords for explanation</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Description</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input name="description" value="{{$data->description}}" id="" class="border p-2" style="width: 100%;" >
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
                                <label for="text-input" class=" form-control-label">Detail Info</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea name="detail" rows="5" id="detail" class="border p-2" style="width: 100%;">{{$data->detail}}</textarea>
                            </div>
                        </div>
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
