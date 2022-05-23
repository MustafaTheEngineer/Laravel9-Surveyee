@extends('layouts.adminwindow')

@section('title','Admin Image Controller')

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
                                        <li class="list-inline-item">Image Gallery</li>
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
                            <h1 class="title-4">
                            </h1>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <div class="container">
                <form class="form-horizontal" action="{{route('admin.image.store', ['pid'=> $survey->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body card-block">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Title</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="title" placeholder="Text" class="form-control">
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
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
                    <hr>
                </form>
            </div>

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
                                    <th>TITLE</th>
                                    <th>IMAGE</th>
                                    <th>DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($images as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->title}}</td>
                                    <td style="max-width: 155px; overflow: hidden;">
                                        @if ($item->image)
                                            <img src="{{Storage::url($item->image)}}" style="max-width: 100px;" alt="{{$item->image}}">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin.image.destroy',['pid'=>$survey->id,'id'=>$item->id])}}" class="btn btn-danger" id="delete">Delete</a>
                                    </td>
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