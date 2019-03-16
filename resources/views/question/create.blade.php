@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="d-flex align-items-center">
                            <h2>Ask Question</h2>

                            <div class="ml-auto">
                                <a href="{{route('questions.index')}}" class="btn btn-info">Back to All Questions</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="{{route('questions.store')}}" method="post">

                            @include("question._form",['buttonText'=>"Ask Question"])

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
