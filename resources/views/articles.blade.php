@extends('layout.master')  
@section('content')
<br><br>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{ $articles->title }}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Start Bootstrap</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on october 3, 2020 at 12:00 PM</p>

        <hr>

        <!-- Preview Image -->
        <img class="card-img-top" src={{$articles->featured_image}} width="750px" height="400px" alt="Card image cap">
        
        
        <hr>

        <!-- Post Content -->
        {{$articles->content}}

        <hr>
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

 </div>
@endsection