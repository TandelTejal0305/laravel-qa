@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div>
                            <h2>Ask Question</h2>

                            <div class="create">
                                <a href="{{route('questions.index')}}" class="btn btn-info">Back to Questions</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="{{route('questions.store')}}" method="post">
                            @csrf
                            <table><tr>
                            <div class="form-group">
                               <td> <label for="question-title">Question Title</label></td></tr>
                                <tr><td><input type="text" name="title" id="question-title" class="form-group" {{$errors->has('title') ? 'is invalid' : ''}}></td>
                                    @if($errors->has('title'))
                                        <div class="invalid-feedback">
                                            <strong>{{$errors->first('title')}}</strong>
                                        </div>
                                    @endif
                            </div></tr>
                            <tr>
                            <div class="form-group">
                                <td><label for="question-body">Explain you Question</label></td></tr>
                                <tr><td> <textarea  name="body" id="question-body" rows="10" class="form-group" {{$errors->has('body') ? 'is invalid' : ''}}></textarea></td>

                                    @if($errors->has('body'))
                                        <div class="invalid-feedback">
                                            <strong>{{$errors->first('body')}}</strong>
                                        </div>
                                    @endif
                            </div></tr>
                            <div class="form-group"><tr>
                               <td><button type="submit" class="btn btn-outline-primary btn-lg">Ask This Question</button></td>
                            </div></tr>
                                </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
