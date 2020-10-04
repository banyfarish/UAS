@extends('layout.master')
  @section('content')
      <!-- Page Content -->
  <div class="container">
  <br><br><br>
<div class="row">

  <!-- Blog Entries Column -->
  
  <div class="col-md-8">
    
    <h1 class="my-4">Silahkan Jika Anda Ingin Mengetahui Aktivitas Saya di Sosmed </h1>

    <div class="card mb-4">
            <img class="card-img-top" src="http://www.thephoblographer.com/wp-content/uploads/2016/09/instagram.jpg" width="650px" height="300px">
            <a href="https://www.instagram.com/banyfarish_/" class="btn btn-primary">Click to Show More &rarr;</a>       
    </div>

    <div class="card mb-4">
          <img class="card-img-top" src="https://manueluel.files.wordpress.com/2011/05/facebook_logo.jpg" width="650px" height="250px" >
            <a href="https://free.facebook.com/profile.php?ref_component=mfreebasic_home_header&ref_page=%2Fwap%2Fhome.php&refid=8" class="btn btn-primary">Click to Show More &rarr;</a>
    </div>

    <div class="card mb-4">
          <img class="card-img-top" src="http://www.norwoodlibrary.org/wp-content/uploads/2017/05/TWITTER-1.jpg" width="650px" height="250px">
            <a href="https://twitter.com/FangsWae" class="btn btn-primary">Click to Show More  &rarr;</a>
    </div>

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
