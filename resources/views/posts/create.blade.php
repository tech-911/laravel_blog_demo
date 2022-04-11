@extends('main')

@section('title', '| Create New Post')
@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}



@endsection
@section('active')
    <li><a href="/">Home </a></li>
    <li class="active"><a href="/about">About</a></li>
    <li><a href="/contact">Contact</a></li>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) }}
            {{ Form::label('body', 'Post Body:', ['style' => 'margin-top:20px']) }}
            {{ Form::textarea('body', null, ['class' => 'form-control', 'required' => '']) }}
            {{ Form::submit('Create Post', ['class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px']) }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection
@section('scripts')

    {!! Html::script('js/parsley.min.js') !!}



@endsection
