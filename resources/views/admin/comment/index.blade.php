@extends('layouts.adminbase')

@section('head')

@endsection

@section('title','Comment List')

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
                                    <li class="list-inline-item">Comments</li>
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
                        <h1 class="title-4">Comment List</h1>
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
                                <th>SURVEY</th>
                                <th>SUBJECT</th>
                                <th>REVIEW</th>
                                <th>STATUS</th>
                                <th>DELETE</th>
                                <th>SHOW</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>
                                    <a href="{{route('admin.survey.show',['id' => $item->survey_id])}}">
                                        {{$item->survey->title}}
                                    </a>
                                </td>
                                <td>{{$item->subject}}</td>
                                <td>{{$item->review}}</td>
                                <td @if ($item->status == 'True') 
                                    class="text-success"
                                @elseif($item->status == 'New')
                                    class="text-primary"
                                @else
                                    class="text-danger"
                                @endif>
                                    {{$item->status}}</td>
                                <td>
                                    <a href="{{route('admin.comment.show',['id'=>$item->id])}}" class="btn btn-primary" onclick="return !window.open(this.href, '', 'top=50 left=100 width=1100, height=700')">Show</a>
                                </td>
                                <td>
                                    <a href="{{route('admin.comment.destroy',['id'=>$item->id])}}" class="btn btn-danger" id="delete">Delete</a>
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