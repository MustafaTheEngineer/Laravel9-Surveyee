@extends('layouts.frontbase')

@section('title','Created Surveys')

@section('content')
    <div class="container" style="margin-top: 150px;margin-bottom: 150px;">
        <h1 class="mb-5">Created Surveys</h1>
        <h2><a type="button" class="btn btn-lg bg-dark text-white mb-5" href="{{route('admin.survey.create')}}"> Create Survey</a></h2>
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>IMAGE</th>
                        <th>DESCRIPTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>
                            {{$item->id}}
                        </td>
                        <td>
                            @if ($item->title)
                                <a class="text-primary" href="{{route('admin.survey.show',['id' => $item->id])}}">
                                    {{$item->title}}
                                </a>
                            @else
                                <span class="text-danger"> Survey {{$comment->survey_id}} has been deleted </span>
                            @endif
                            
                        </td>
                        <td>
                            @if ($item->image)
                                        <img src="{{Storage::url($item->image)}}" style="max-width: 100px;" alt="{{$item->image}}">
                                    @endif
                        </td>
                        <td>
                            {{$item->description}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

