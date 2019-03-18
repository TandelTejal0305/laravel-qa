@extends('layouts.app')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="d-flex align-items-center">
                        <h2>All Question</h2>
                        <div class="ml-auto">
                            <a href="{{route('questions.create')}}" class="btn btn-info">Ask Question</a>
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

                                    <div class="d-flex align-item-center">

                                        <h3 class="mt-0"><a href="{{$question->url}}">{{$question->title}}</a> </h3>

                                        <div class="ml-auto">
                                            @can('update',$question)
                                                <a href="{{route('questions.edit',$question->id)}}" class="btn  btn-outline-info">Edit</a>
                                            @endcan
                                         </div>
                                        @can('delete',$question)
                                        <form class="form-delete" method="post" action="{{route('questions.destroy',$question->id)}}">

                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are You Sure?')">DELETE</button>
                                        </form>
                                         @endcan
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
