@extends('main')
@section('title', '| About')
@section('active')
    <li><a href="/">Home </a></li>
    <li class="active"><a href="/about">About</a></li>
    <li><a href="/contact">Contact</a></li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>About Me</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, voluptate quae quo reprehenderit
                cumque numquam laboriosam dolor sequi sint architecto dolores ut ducimus. Necessitatibus nostrum
                accusamus obcaecati unde voluptatibus numquam?</p>
        </div>
    </div>
@endsection
