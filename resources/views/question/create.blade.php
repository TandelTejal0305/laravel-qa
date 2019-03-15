@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="d-flex align-item-center">
                            <h2>Ask Question</h2>

                            <div class="create">
                                <a href="{{route('questions.index')}}" class="btn btn-info">Back to Questions</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="{{route('questions.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="question-title">Question Title</label>
                                <input type="text" name="title" value="{{old('title')}}" id="question-title" class="form-control  {{$errors->has('title') ? 'is invalid' : ''}}">
                                    @if($errors->has('title'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </div>
                                    @endif
                            </div>

                            <div class="form-group">
                                <label for="question-body">Explain you Question</label>
                                 <textarea  name="body" id="question-body" rows="10" class="form-control {{$errors->has('body') ? 'is invalid' : ''}} ">{{old('body')}}</textarea>

                                    @if($errors->has('body'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('body') }}</strong>
                                        </div>
                                    @endif

                            </div>
                            <div class="form-group">
                               <button type="submit" class="btn btn-success">Ask This Question</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
