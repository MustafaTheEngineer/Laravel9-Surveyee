@extends('layouts.frontbase')

@section('title','Created Surveys')

@section('content')
    <div class="container" style="margin-top: 150px;margin-bottom: 150px;">
        <h1 class="mb-5">Attendance</h1>
        <div class="table-responsive m-b-40">
            <table class="table">
                <thead>
                    <tr>
                        <th>NAME</th>
                        <th>ROLES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>
                            @if ($item->name)
                                <a class="text-primary" href="{{route('userpanel.index',['id' => $item->id])}}">
                                    {{$item->name}}
                                </a>
                            @else
                                <span class="text-danger"> Survey {{$comment->survey_id}} has been deleted </span>
                            @endif
                            
                        </td>
                        <td>
                            @foreach ($item->roles as $key => $a)
                            {{$a->name}}
                                @if (isset($item->roles[$key+1]) )
                                    ,
                                @endif
                            @endforeach
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

