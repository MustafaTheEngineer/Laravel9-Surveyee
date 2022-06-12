@extends('layouts.frontbase')

@section('title','Survey - '.$data->title)

@section('content')
    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7 mb-5">
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
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Show Survey</li>
                                </ul>
                            </div>
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
                    <div class="col-md-12">
                        <h1 class="title-4">Show: {{$data->title}}
                        </h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- END WELCOME-->

        <!-- START FORM -->
        <div class="container my-5">
            <!-- TOP CAMPAIGN-->
            <div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th class="col-2">Category</th>
                                <td class="col-10">
                                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category, $data->category->title)}}
                                </td>
                            </tr>
                            <tr>
                                <th class="col-2">Title</th>
                                <td class="col-10">{{$data->title}}</td>
                            </tr>
                            <tr>
                                <th class="col-2">Creator</th>
                                <td class="col-10">
                                    <a @if (Auth::id() == $data->user_id)
                                        href="{{route('userpanel.index',['id'=> $data->user->id])}}" class="text-primary"
                                    @endif>
                                        {{$data->user->name}}
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-2">Keywords</th>
                                <td class="col-10">{{$data->keywords}}</td>
                            </tr>
                            <tr>
                                <th class="col-2">Description</th>
                                <td class="col-10">{{$data->description}}</td>
                            </tr>
                            <tr>
                                <th class="col-2">Image</th>
                                <td class="col-10"><img style="max-width: 6rem;" src="{{Storage::url($data->image)}}" alt=""></td>
                            </tr>
                            <tr>
                                <th class="col-2">Detail</th>
                                <td class="col-10">{!! $data->detail !!}</td>
                            </tr>
                            <tr>
                                <th class="col-2">Status</th>
                                <td class="col-10">{{$data->status}}</td>
                            </tr>
                            <tr>
                                <th class="col-2">Created at</th>
                                <td class="col-10">{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th class="col-2">Updated at</th>
                                <td class="col-10">{{$data->updated_at}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <a href="{{route('userpanel.addquestion',['id' => $data->id])}}" class="btn btn-primary my-3">Add Question</a>
                <a href="{{route('userpanel.editsurvey',['id' => $data->id])}}" class="btn btn-warning my-3">Edit</a>
                <a href="{{route('userpanel.deletesurvey',['id' => $data->id])}}" class="btn btn-danger my-3" onclick="return confirm('Are you sure to delete?')">Delete</a>
                <a href="{{route('userpanel.surveyfillers',['id' => $data->id])}}" class="btn btn-success my-3 " style="margin-left: rem;">Attendances</a>
                <a href="{{route('userpanel.statistics',['id' => $data->id])}}" class="btn btn-secondary my-3 " style="margin-left: rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                      </svg>
                    Statistics
                </a> 
            </div>
            <!--  END TOP CAMPAIGN-->
        </div>

        <div class="">
            <div class="d-flex justify-content-center mt-5">
                <h2>Question Number: {{count($data->questions)}}</h2>
            </div>
            
            <div class="questions d-flex justify-content-center align-items-center" style="flex-direction: column;">
            @foreach ($data->questions as $key => $question)
                <div class="question-group d-flex justify-content-center align-items-center" style="flex-direction: column;">
                    <p class="ms-5 my-5">
                        {{($key + 1)}}. {{ $question->question}}
                        <br>
                    </p>
                    <br style="display: block;color:black;">
                    <ul class="list-unstyled d-flex justify-content-center" style="flex-direction: column;">
                        <li><span class="text-primary mr-3">Option 1</span> {{$question->option1}}</li>
                        <li><span class="text-primary mr-3">Option 2</span> {{$question->option2}}</li>
                        @if ($question->option3)
                            <li><span class="text-primary mr-3">Option 3</span> {{$question->option3}}</li>
                        @endif
                        @if ($question->option4)
                            <li><span class="text-primary mr-3">Option 4</span> {{$question->option4}}</li>
                        @endif
                        @if ($question->option5)
                            <li><span class="text-primary mr-3">Option 5</span> {{$question->option5}}</li>
                        @endif
                    </ul>
                    <div class="question-buttons">
                        <a href="{{route('admin.question.destroy',['id' => $question->id])}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger my-3">Delete</a>
                    </div>
                </div>
                
                <div class="my-3" style="border: 1px solid black; width: 100%;"></div>
            @endforeach
            </div>
        </div>
        <!-- END FORM -->
    </div>
@endsection