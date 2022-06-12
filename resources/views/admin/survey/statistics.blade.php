@extends('layouts.adminbase')

@section('content')
<div class="">
    <div class="d-flex justify-content-center mt-5">
        <h2>Question Number: {{count($data)}}</h2>
    </div>
    
    <div class="questions d-flex justify-content-center align-items-center" style="flex-direction: column;">
    @foreach ($data as $key => $item)
        @php
            $nulls=0;
            for ($i=0; $i < 5; $i++) { 
                if($data[$key][$i] == -1)
                    ++$nulls;
            }
            $sum = array_sum($data[$key]) + $nulls;
        @endphp
        <p>
            {{$questionClass[$key]->question}}
            {{$sum}}
        </p>
        <ul class="list-unstyled d-flex justify-content-center" style="flex-direction: column;">
            <li>
                <span class="text-primary mr-3">{{floor((($data[$key][0] / $sum)*100)*100 )/ 100}}%
                </span> {{$questionClass[$key]->option1}}
            </li>
            <li>
                <span class="text-primary mr-3">{{floor((($data[$key][1] / $sum)*100)*100 )/ 100}}%
                </span> {{$questionClass[$key]->option2}}
            </li>
            @if ($data[$key][2] != -1)
                <li>
                    <span class="text-primary mr-3">{{floor((($data[$key][2] / $sum)*100)*100 )/ 100}}%
                    </span> {{$questionClass[$key]->option3}}
                </li>
            @endif
            @if ($data[$key][3] != -1)
                <li>
                    <span class="text-primary mr-3">{{floor((($data[$key][3] / $sum)*100)*100 )/ 100}}%
                    </span> {{$questionClass[$key]->option4}}
                </li>
            @endif
            @if ($data[$key][4] != -1)
                <li>
                    <span class="text-primary mr-3">{{floor((($data[$key][4] / $sum)*100)*100 )/ 100}}%
                    </span> {{$questionClass[$key]->option5}}
                </li>
            @endif
        </ul>

        <div class="question-group d-flex justify-content-center align-items-center" style="flex-direction: column;">
            <div class="question-buttons">
                <a href="{{route('admin.question.destroy',['id' => $questionClass[$key]->id])}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger my-3">Delete</a>
            </div>
        </div>
        
        <div class="my-3" style="border: 1px solid black; width: 100%;"></div>
    @endforeach
    </div>
</div>

@endsection