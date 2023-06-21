@extends('template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PORTOPOLIO </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/boo"></script>
    <style type="text/css">


        body{
            font-family: Arial;
        }
        #projects{
            background-color: rgb(255, 255, 255);
        }
        .form-label>span{
            color: rgb(248, 248, 248);
        }
    </style>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body>

    <!--NavBar-->
    {{-- <nav class=" navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Siti ikrima</a>
            <button class="navbar-toggle" type="button" data-bs-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar_toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        </div>
    </nav> --}}
  <!--Akhie navbar-->
  <!-- home -->
  @foreach ($profils as $item)

  <section id="home" class="pt-5">
    <div class="container-fluid p-0">
        <div class="p-5 text-bg-light text-center">
            <img src="/storage/{{$item->foto}}" width="150">
            {{-- <img src="/storage/{{ $profils->foto }}" alt="" width="200" class="rounded-circle img-thumbnail" srcset=""> --}}
            <h2 class="mt-3 fw-bold">{{$item->nama}}</h2>
            <p class="fs-5">pelajar</p>
        </div>
    </div>
  </section>
  <!-- Akhir home -->
  <!-- aboutme -->
  <section id="about" class="pt-5">
    <div class="container">
        <div class="p-10 text-center">
            <h3 class="fw-bold mb-3">About me</h3>
              {{-- <div class="" >
                 <p > Antariksawan (lazim disebut astronaut) adalah sebutan bagi orang yang telah menjalani
                     latihan dalam program penerbangan antariksa manusia untuk memimpin,
                    menerbangkan pesawat, atau menjadi awakpesawat antariksa. </p>
             </div> --}}
             <div class="">
                <p>{{$item->deskripsi}}</p>
             </div>
        </div>
    </div>
  </section>
  @endforeach

  <!-- akhir about -->
  <!-- my Project -->
  <section id="projects" class="pt-5">
    <div class="container">
        <div class="p-5 text-bg-light text-center">
            <h3 class="fw-bold mb-3"> My Projects</h3>
            <div class="row justify-content-center">
             @foreach ($portofolio as  $item)

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                           <img src="/storage/{{$item->foto}}" width="150">
                            <p>{{$item->kategori}}</p>
                            <p>{{$item->deskripsi}}</p>
                                  </p>
                        </div>
                    </div>
                    
                </div>
              @endforeach

                <div class="col-md-4 mb-3">
                    {{-- <div class="card">
                        <img src="https://img.freepik.com/free-vector/flying-satellite-with-antenna-space-cartoon-icon-illustration_138676-2898.jpg?auto=format&h=200" alt="">
                        <div class="card-body">
                            <p>Stasiun luar angkasa adalah struktur buatan yang dirancang untuk keabadian 
                                manusia di luar angkasa. … Stasiun luar angkasa dirancang untuk mendukung
                                 kehidupan di orbit dalam jangka menengah, untuk periode berminggu-minggu, 
                                 berbulan-bulan, atau bahkan bertahun-tahun.
                                </p>
                        </div>
                    </div> --}}
                </div>
                <div class="col-md-4 mb-3">
                    {{-- <div class="card"> --}}
                        {{-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjixjckXIJVAisc-TJC2PiVPlnBZVGkgVVug&usqp=CAUhttps://i.pinimg.com/236x/07/37/dc/0737dc293808f602a9477a2898e28824.jpg" alt="">
                        <div class="card-body">
                            <p>Perlengkapan yang dipakai astronot adalah perlengkapan standar.
                                 Namun, beberapa item, seperti sarung tangan, adalah persyaratan khusus. Kacamata Astronot juga yang digunakan oleh para astronot
                                 dapat melindungi mata dari efek berbahaya dari debu dan kotoran luar angkasa.</p>
                        </div> --}}
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- akhir project -->
  <!-- awal Contact -->

  <section>


    <div id="contact" class="pt-5">
        <div class="container">
            <div class="p-5 text-center">
                <h3 class="fw-bold mb-3">contact me</h3>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action="{{ url('contact/create') }}" method="post" enctype="multipart/form-data">
                            @csrf
                                 <div class="row">
                                     <div class="container-fluid p-3 ">
                                        <div class="col-md-12 mt-5">
                                            <form action="">
                                                <div class="col-mb-3">
                                                    <label for="" class="form-label">NAMA</label>
                                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Silahkan di isi">
                                                </div>
                                                <div class="col-mb-3">
                                                    <label for="" class="form-label">Email</label>
                                                    <input type="email" name="email" id="email" class="form-control" placeholder="Silahkan di isi">
                                                </div>
                                                <div class="col-mb-3">
                                                    <label for="" class="form-label">Pesan</label>
                                                    <input type="text" name="pesan" id="pesan" class="form-control" placeholder="Silahkan di isi">
                                                </div>
                                                <div class="col-mb-3">
                                                    <label for="" class="form-label">NO HP</label>
                                                    <input type="number" name="No_telp" id="No_telp" class="form-control" placeholder="Silahkan di isi">
                                                </div>
                                                                        
                                                <div class="pt-3 ">
                                                    <input type="submit" value="Simpan" class="btn btn-primary">
                                                </div>
                        
                                            </form>
                    
                                        </div>
                                     </div>
                                 </div>
                                </form>
                    {{-- @endsection --}}
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

  </section>
</body>
<div class="container my-5">

  <footer class="bg-light text-center text-white">
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->

            <div class="text-center p-3" style="background-color:rgb(255, 255, 255) ">
    © 2022 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">skrimaaaaaaaaa</a>
  </div>
  <!-- Copyright -->
</footer>

 
  
</div>
<!-- End of .container -->
</html>