@extends('layout.master')
@section('content')
<br><br><br>
    <div class="container">
        <div class="row">
        
      <!-- Post Content Column -->
      <div class="col-lg-12">

        <!-- Title -->
        <h1 class="mt-4">Tentang Author</h1>

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
        <img class="card-img-top" src="{{ ('https://1.bp.blogspot.com/-YmHofGl1x6Y/X24T0C-D-gI/AAAAAAAAG2M/wzDmMykFBMwVPitScjOO-0hsFzNnIq9kwCLcBGAsYHQ/s320/baiq.jpeg') }}" 
        style="width:500px;height:400px;">
        
        

        <hr>

        <!-- Post Content -->
        <blockquote class="blockquote">
          <p class="mb-0">Hi, salam kenal.</p>
          <footer class="blockquote-footer">Baiq Fangs
            <cite title="Source Title">Banyalvarez56@gmail.com</cite>
          </footer>
        </blockquote>

        <p>perkenalkan nama saya bany faris hanafi bisa dipanggil bany bisa juga baiq. saya lahir di Sumenep pada 02 februari 2001. bagi yang belum
        tau sumenep ini salah satu kota yang berda di ujung timur pulau madura. hobi saya yaitu sih untuk sementara ini masih basket gatau besoknya 
        apa mau ganti hobi atau enggak </p>
        <p>Untuk umur, saya masih berumur 19 tahun dan saya berkuliah di polinema yaitu politeknik negeri malang. Jurusan saya itu adalah sisstem informasi 
        dengan berprodi D3 Manajemen Informatika. Untuk tempat tinggal saat ini saya mengontrak sebuah rumah dengan teman sekampung. </p>
        <P>dan jika anda ingin mengetahui saya lebih lanjut bisa anda main-main ke akun sosial media saya yang bisa anda kunjungi di contact</P>


        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        @foreach($komentarAll as $com)
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src={{$com->featured_image}} alt="">
          <div class="media-body">
            <h5 class="mt-0">{{$com->name}}</h5>
            {{$com->content}}
          </div>
        </div>
        @endforeach
      </div>

    </div>
    </div>
@endsection