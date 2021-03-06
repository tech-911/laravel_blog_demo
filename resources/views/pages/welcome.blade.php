@extends('main')
@section('title', '| Homepage')
@section('active')
    <li class="active"><a href="/">Home </a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/contact">Contact</a></li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to My Blog</h1>
                <p class="lead">Thank you so much for visiting. This is my test website built with
                    Laravel. Please read my
                    latest post!</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
            </div>
        </div>
    </div> {{-- row ending --}}
    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ratione doloremque saepe facere
                    distinctio vitae quod quidem quas eum, culpa reprehenderit, debitis, est animi. Ducimus corporis
                    voluptas 
                    aperiam facilis fugiat!</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ratione doloremque saepe facere
                    distinctio vitae quod quidem quas eum, culpa reprehenderit, debitis, est animi. Ducimus corporis
                    voluptas
                    aperiam facilis fugiat!</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ratione doloremque saepe facere
                    distinctio vitae quod quidem quas eum, culpa reprehenderit, debitis, est animi. Ducimus corporis
                    voluptas
                    aperiam facilis fugiat!</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ratione doloremque saepe facere
                    distinctio vitae quod quidem quas eum, culpa reprehenderit, debitis, est animi. Ducimus corporis
                    voluptas
                    aperiam facilis fugiat!</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>

        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>
@endsection
