@extends('layouts.adminwindow')

@section('title','Show Message')

@section('content')
    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">

        <!-- START FORM -->
        <div class="container my-5">
            <!-- TOP CAMPAIGN-->
            <div class="">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th class="col-2">ID</th>
                                <td class="col-10">
                                    {{$data->id}}
                                </td>
                            </tr>
                            <tr>
                                <th class="col-2">Name</th>
                                <td class="col-10">{{$data->name}}</td>
                            </tr>
                            <tr>
                                <th class="col-2">Email</th>
                                <td class="col-10">{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th class="col-2">Phone</th>
                                <td class="col-10">{{$data->phone}}
                            </tr>
                            <tr>
                                <th class="col-2">Subject</th>
                                <td class="col-10">
                                    {{ $data->subject }}
                                </td>
                            </tr>
                            <tr>
                                <th class="col-2">Messsage</th>
                                <td class="col-10">{{$data->message}}</td>
                            </tr>
                            <tr>
                                <th class="col-2">Sent at</th>
                                <td class="col-10">{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th class="col-2">Messsage</th>
                                <td class="col-10">{{$data->ip}}</td>
                            </tr>
                            <tr>
                                <th class="col-2">Note</th>
                                <td class="col-10">
                                    <form action="{{route('admin.message.update',['id' => $data->id])}}" method="post">
                                        @csrf
                                        <textarea name="note" id="note" style="border: 1px solid black; width: 100%; padding: 10px;">
                                            {{$data->note}}
                                        </textarea>
                                        <div class="card-footer bg-white mt-3">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Update Note
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--  END TOP CAMPAIGN-->
        </div>
        <!-- END FORM -->
    </div>
@endsection