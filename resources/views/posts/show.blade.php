@extends('main')

@section('title', '| View Posts')
@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}



@endsection
@section('active')
    <li><a href="/">Home </a></li>
    <li class="active"><a href="/about">About</a></li>
    <li><a href="/contact">Contact</a></li>
@endsection


@section('content')

<p class="lead">This is the blog posts</p>

@endsection
@section('scripts')

    {!! Html::script('js/parsley.min.js') !!}


@endsection
