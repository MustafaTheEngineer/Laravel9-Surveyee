@extends('layouts.frontbase')

@section('title','Created Surveys')

@section('content')
    <div class="container" style="margin-top: 150px;margin-bottom: 150px;">
        <h1 class="mb-5">Created Surveys</h1>
        <h2><a type="button" class="btn btn-lg bg-dark text-white mb-5" href="{{route('userpanel.createsurvey')}}"> Create Survey</a></h2>
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>IMAGE</th>
                        <th>IMAGE GALLERY</th>
                        <th>DESCRIPTION</th>
                        <th>STATISTICS</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
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
                                <a class="text-primary" href="{{route('userpanel.showsurvey',['id' => $item->id])}}">
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
                            <a href="{{route('userpanel.image.indeximage',['pid' => $item->id])}}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=1100, height=700')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                    <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
                                  </svg>
                            </a>
                        </td>
                        <td>
                            {{$item->description}}
                        </td>
                        <td>
                            <a href="{{route('userpanel.statistics',['id' => $item->id])}}" class="btn btn-secondary my-3 " style="margin-left: rem;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                  </svg>
                                Statistics
                            </a> 
                        </td>
                        <td>
                            <a type="button" href="{{route('userpanel.editsurvey',['id' => $item->id])}}" class="btn btn-warning my-3 " style="margin-left: rem;">
                                Edit
                            </a> 
                        </td>
                        <td>
                            <a href="{{route('userpanel.deletesurvey',['id' => $item->id])}}" class="btn btn-danger my-3 " style="margin-left: rem;">
                                Delete
                            </a> 
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

