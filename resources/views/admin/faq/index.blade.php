@extends('layouts.adminbase')

@section('head')

@endsection

@section('title','Question List')

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
                                    <li class="list-inline-item">Faq</li>
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
                        <h1 class="title-4">Question List
                        </h1>
                        <a href="{{route('admin.faq.create')}}" class="btn btn-secondary ml-5">Add Question</a>
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
                                <th>QUESTION</th>
                                <th>ANSWER</th>
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
                                <td>{{$item->question}}</td>
                                <td>{!! $item->answer !!}</td>
                                @if ($item->status == 'True')
                                    <td class="process">{{$item->status}}</td>
                                @else
                                    <td class="denied">{{$item->status}}</td>
                                @endif
                                <td><a href="{{route('admin.faq.edit',['id'=>$item->id])}}" class="btn btn-warning">Edit</a></td>
                                <td><a href="{{route('admin.faq.destroy',['id'=>$item->id])}}" class="btn btn-danger" id="delete">Delete</a></td>
                                <td><a href="{{route('admin.faq.show',['id'=>$item->id])}}" class="btn btn-primary">Show</a></td>
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