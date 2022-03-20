<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Laravle Blog</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>


  {{-- Navbar starts --}}


  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
          data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Laravel Blog</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="/">Home </a></li>
          <li ><a href="/about">About</a></li>
          <li><a href="/contact">Contact</a></li>

        </ul>

        <ul class="nav navbar-nav navbar-right">

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false">My Account <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>


  {{-- Navbar ends --}}


  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron">
          <h1>Welcome to My Blog</h1>
          <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my
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
            distinctio vitae quod quidem quas eum, culpa reprehenderit, debitis, est animi. Ducimus corporis voluptas
            aperiam facilis fugiat!</p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
        <hr>
        <div class="post">
          <h3>Post Title</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ratione doloremque saepe facere
            distinctio vitae quod quidem quas eum, culpa reprehenderit, debitis, est animi. Ducimus corporis voluptas
            aperiam facilis fugiat!</p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
        <hr>
        <div class="post">
          <h3>Post Title</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ratione doloremque saepe facere
            distinctio vitae quod quidem quas eum, culpa reprehenderit, debitis, est animi. Ducimus corporis voluptas
            aperiam facilis fugiat!</p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
        <hr>
        <div class="post">
          <h3>Post Title</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ratione doloremque saepe facere
            distinctio vitae quod quidem quas eum, culpa reprehenderit, debitis, est animi. Ducimus corporis voluptas
            aperiam facilis fugiat!</p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
        <hr>

      </div>
      <div class="col-md-3 col-md-offset-1">
        <h2>Sidebar</h2>
      </div>
    </div>
  </div>{{-- container ending --}}







  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
  </script>
</body>

</html>