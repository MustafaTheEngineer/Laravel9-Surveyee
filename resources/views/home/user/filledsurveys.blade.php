@extends('layouts.frontbase')

@section('title','User Comments')

@section('content')
    <div class="container" style="margin-top: 150px;margin-bottom: 150px;">
        <h1 class="mb-5">Filled Surveys</h1>

        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>TITLE</th>
                        <th>DESCRIPTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($filledSurveys as $item)
                    <tr>
                        <td>
                            @if ($item->title)
                                <a class="text-primary" href="{{route('survey',['id' => $item->id])}}">
                                    {{$item->title}}
                                </a>
                            @else
                                <span class="text-danger"> Survey {{$comment->survey_id}} has been deleted </span>
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

