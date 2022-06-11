@extends('layouts.adminbase')

@section('content')
<div class="">
    <div class="d-flex justify-content-center mt-5">
        <h2>Question Number: {{count($data)}}</h2>
    </div>
    
    <div class="questions d-flex justify-content-center align-items-center" style="flex-direction: column;">
    @foreach ($data as $key => $question)
        <p>
            {{count($question->attendance)}}
        </p>
        <p>
            {{$question->question}}
        </p>
        <ul class="list-unstyled d-flex justify-content-center" style="flex-direction: column;">
            <li><span class="text-primary mr-3">{{count($question->option1->attendance) /count($question->attendance)}}</span> {{$question->option1}}</li>
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







        <div class="question-group d-flex justify-content-center align-items-center" style="flex-direction: column;">
            <div class="question-buttons">
                <a href="{{route('admin.question.edit',['id' => $question->id])}}" class="btn btn-warning my-3">Edit</a>
                <a href="{{route('admin.question.destroy',['id' => $question->id])}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger my-3">Delete</a>
            </div>
        </div>
        
        <div class="my-3" style="border: 1px solid black; width: 100%;"></div>
    @endforeach
    </div>
</div>

@endsection