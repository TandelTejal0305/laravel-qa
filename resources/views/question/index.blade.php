@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="container">
                            <div class="col-md-12">
                            <div class="col-md-10">
                                    <h2>All Question</h2>
                                </div>
                           <div class="col-md-1">
                               <a href="{{route('questions.create')}}" class="btn btn-info">Ask Question</a>
                            </div>
                       </div>
                        </div>
                    </div>

                    <div class="panel-body">

                        @include('layouts._messsages')
                        @foreach($questions as $question)
                            <div class="media">
                                <div class="d-flex flex-column counters">
                                    <div class="vote">

                                        <strong>{{$question->votes}}</strong>{{str_plural('vote',$question->votes)}}
                                    </div>

                                    <div class="status {{$question->status}}">

                                        <strong>{{$question->answers}}</strong>{{str_plural('answer',$question->answers)}}
                                    </div>
                                    <div class="view">

                                        {{$question->views." ".str_plural('view',$question->views)}}
                                    </div>
                                </div>
                                <div class="media-body">

                                    <div class="row">
                                        <div class="col-md-10">
                                        <h3 class="mt-0"><a href="{{$question->url}}">{{$question->title}}</a> </h3>
                                         </div>
                                    <div class="col-md-1">
                                        <a href="{{route('questions.edit',$question->id)}}" class="btn  btn-outline-info">Edit</a>
                                    </div>
                                        </div>
                                    <p class="lead">
                                        Asked By
                                        <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                                        <small class="text-muted">{{$question->created_date}}</small>
                                    </p>
                                    {{str_limit($question->body,250)}}

                                </div>
                                <hr>
                            </div>
                        @endforeach
                        <div class="text-center">
                        {{$questions->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
