@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="d-flex align-item-center">
                            <h2>Edit Question</h2>

                            <div class="create">
                                <a href="{{route('questions.index')}}" class="btn btn-info">Back to Questions</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="{{route('questions.update',$question->id)}}" method="post">
                            {{method_field('PUT')}}
                            @include("question._form",['buttonText'=>"Update Question"])

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
