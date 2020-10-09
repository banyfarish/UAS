@extends('layout.master')
  @section('content')
      <!-- Page Content -->
  <div class="container">
  <br><br><br>
<div class="row">

  <!-- Blog Entries Column -->
  
  
  <div class="col-md-8">
  <div class="card body">
        @if (session('status'))
            <div class="alern alern-success" role="alert">
                {{ session('status')}}
            </div>
        @endif

        you are logged in!
    </div>
    
    <h1 class="my-4">Karakter Pemain Tim Shohoku</h1>

    @foreach($articlesAll as $art)
    <!-- Blog Post -->
    <div class="card mb-4">
    <img class="card-img-top" src={{$art->featured_image}} width="750px" height="300px" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">{{$art->title}}</h2>
        <p class="card-text">{{ Str::limit($art->content, 100,'...') }}</p>
        <a href="{{ '/articles/'.$art->id }}" class="btn btn-primary">Read More &rarr;</a>
      </div>
      <div class="card-footer text-muted">
        Posted on January 1, 2020 by
        <a href="#">Start Bootstrap</a>
      </div>
    </div>
    @endforeach

    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
      <li class="page-item">
        <a class="page-link" href="#">&larr; Older</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">Newer &rarr;</a>
      </li>
    </ul>

  </div>

  <!-- Sidebar Widgets Column -->
  <div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
      <h5 class="card-header">Search</h5>
      <div class="card-body">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-append">
            <button class="btn btn-secondary" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
      <h5 class="card-header">Categories</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#">Kainan</a>
              </li>
              <li>
                <a href="#">Shoyo</a>
              </li>
              <li>
                <a href="#">Meihou</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#">Ryounan</a>
              </li>
              <li>
                <a href="#">Sannoh</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4">
      <h5 class="card-header">Slam Dunk</h5>
      <div class="card-body">
      The manga and anime series Slam Dunk features a cast of 
      fictional characters created by Takehiko Inoue. The series 
      takes place in Japan, with the main characters being high school 
      basketball players from Kanagawa Prefecture.
      </div>
    </div>

  </div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->
  @endsection