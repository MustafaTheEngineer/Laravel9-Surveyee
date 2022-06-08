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
                                <th class="col-2">Roles</th>
                                <td class="col-10">
                                    @foreach ($data->roles as $key => $role)
                                    <div class="d-inline-block">
                                        <div class="border border-primary rounded" 
                                        style="display: flex; align-items:center;">
                                            <div class="px-2 py-1">
                                                {{$role->name}}
                                            </div>
                                                <a href="{{route('admin.user.destroyrole',['userID' => $data->id, 'roleID' => $role->id])}}" class="text-decoration-none trash px-2 py-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                                      </svg>
                                                </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th class="col-2">Add Role</th>
                                <td class="col-10">
                                    <form action="{{route('admin.user.addrole',['id' => $data->id])}}" method="post">
                                    @csrf
                                        <select name="role_id" id="">
                                            @foreach ($roles as $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
                                        </select>

                                        <div class="card-footer mt-2">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Add Role
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