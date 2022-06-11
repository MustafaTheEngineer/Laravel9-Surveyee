@extends('layouts.adminbase')

@section('head')

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
                                <th>IMAGE GALLERY</th>
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
                                <td>
                                    <a href="{{route('admin.image.index',['pid' => $item->id])}}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=1100, height=700')">
                                        <i class="fas fa-picture-o" style="font-size: 40px;"></i>
                                    </a>
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