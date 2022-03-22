@extends('main')
@section('title', '| Contact')
@section('content')
@section('active')
    <li><a href="/">Home </a></li>
    <li><a href="/about">About</a></li>
    <li class="active"><a href="/contact">Contact</a></li>
@endsection
<div class="row">
    <div class="col-md-12">
        <h1>Contact Me</h1>
        <hr>
        <form action="">
            <div class="form-group">
                <label name="email">Email:</label>
                <input id="email" name="email" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label name="subject">Subject:</label>
                <input id="subject" name="subject" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label name="message">Message:</label>
                <textarea id="message" name="message" class="form-control" type="text">Type your message here... </textarea>
            </div>
            <input type="submit" placeholder="Send Message" class="btn btn-success">
        </form>
    </div>
</div>
@endsection
