@extends('layouts.frontbase')

@section('title','User Comments')

@section('content')
    <div class="container-fluid" style="margin-top: 150px;">
        <h1 class="mb-5">Comments</h1>

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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $comment)
                    <tr>
                        <td>{{$comment->id}}</td>
                        <td>
                            @if ($comment->survey)
                                <a class="text-primary" href="{{route('survey',['id' => $comment->survey_id])}}">
                                    {{$comment->survey->title}}
                                </a>
                            @else
                                <span class="text-danger"> Survey {{$comment->survey_id}} has been deleted </span>
                            @endif
                            
                        </td>
                        <td>{{$comment->subject}}</td>
                        <td>{{$comment->review}}</td>
                        <td @if ($comment->status == 'True') 
                            class="text-success"
                        @elseif($comment->status == 'New')
                            class="text-primary"
                        @else
                            class="text-danger"
                        @endif>
                            {{$comment->status}}</td>
                        <td>
                            <a href="{{route('userpanel.reviewdestroy',['id'=>$comment->id])}}" class="btn btn-danger" id="delete" onclick="return confirm('Are you sure to delete?')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

