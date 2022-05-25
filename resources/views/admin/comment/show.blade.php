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
                                <th class="col-2">User id</th>
                                <td class="col-10">{{$data->user_id}}</td>
                            </tr>
                            <tr>
                                <th class="col-2">Survey</th>
                                <td class="col-10">{{$data->survey->title}}</td>
                            </tr>
                            <tr>
                                <th class="col-2">Survey id</th>
                                <td class="col-10">{{$data->survey_id}}</td>
                            </tr>
                            <tr>
                                <th class="col-2">Subject</th>
                                <td class="col-10">{{$data->subject}}
                            </tr>
                            <tr>
                                <th class="col-2">Review</th>
                                <td class="col-10">
                                    {{ $data->review }}
                                </td>
                            </tr>
                            <tr>
                                <th class="col-2">Rate</th>
                                <td class="col-10">
                                    {{ $data->rate }}
                                </td>
                            </tr>
                            <tr>
                                <th class="col-2">Status</th>
                                <td class="col-10">
                                    {{ $data->status }}
                                </td>
                            </tr>
                            <tr>
                                <th class="col-2">Sent at</th>
                                <td class="col-10">{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th class="col-2">ip</th>
                                <td class="col-10">{{$data->IP}}</td>
                            </tr>
                            <tr>
                                <th class="col-2">Status</th>
                                <td class="col-10">
                                    <form action="{{route('admin.comment.update',['id' => $data->id])}}" method="post">
                                        @csrf
                                        <select name="status" id="">
                                            <option selected>{{ $data->status }}</option>
                                            <option value="True">True</option>
                                            <option value="False">False</option>
                                        </select>
                                        <div class="card-footer bg-white mt-3">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Update
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