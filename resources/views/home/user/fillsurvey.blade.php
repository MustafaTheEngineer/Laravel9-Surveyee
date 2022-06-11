@extends('layouts.frontbase')

@section('title','Survey - '.$question[$count]->survey->title)

@section('content')
    <div class="container">
        <h3 class="mb-5" style="margin-top: 150px;">Survey - {{$question[$count]->survey->title}}</h3>
        <div class="question" style="margin-bottom: 200px;">
            <div class="d-flex">
                <h6>{{$question[$count]->question}}</h6> 
                <span class="h6" style="margin-left: auto; margin-right: 100px;font-weight: 700;">{{$count + 1}} / {{$question->count()}}</span>
            </div>
                <form action="{{route('userpanel.storeattendance')}}" method="post">
                    <ul class="list-unstyled">
                        @csrf
                        <input type="text" class="d-none" name="survey_id" value="{{$question[$count]->survey_id}}">
                        <input type="text" class="d-none" name="question_id" value="{{$question[$count]->id}}">
                        <li>
                            <input type="radio" name="answer" id="option1" value="1">
                            <label for="option1">{{$question[$count]->option1}}</label>
                        </li>
                        <li>
                            <input type="radio" name="answer" id="option2" value="2">
                            <label for="option2">{{$question[$count]->option2}}</label>
                        </li>
                        @if ($question[$count]->option3)
                            <li>
                                <input type="radio" name="answer" id="option3" value="3">
                                <label for="option3">{{$question[$count]->option3}}</label>
                            </li>
                        @endif
                        @if ($question[$count]->option4)
                            <li>
                                <input type="radio" name="answer" id="option4" value="4">
                                <label for="option4">{{$question[$count]->option4}}</label>
                            </li>
                        @endif
                        @if ($question[$count]->option5)
                            <li>
                                <input type="radio" name="answer" id="option5" value="5">
                                <label for="option5">{{$question[$count]->option5}}</label>
                            </li>
                        @endif
                    </ul>
                    <input type="text" name="count" value="{{$count}}" class="d-none">
                    @if ($question->count() == ($count + 1))
                        <button type="submit" class="form-control-submit-button">DONE</button>
                    @else
                        <button type="submit" class="form-control-submit-button">Send</button>
                    @endif
            </form>
        </div>
    </div>
@endsection