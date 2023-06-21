


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Register</title>

 
            
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">


</head>

<body class="">
    <style>
        body{
            /* background-image:image-set('img/orang.png') */
            background-color: rgb(64, 151, 201);
        }
    </style>

    <div class="container py-5">

        <div class="card o-hidden border-0 shadow-lg my-5 py-2">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnqiNKVvVVcQoKT5e8pj-YwAkC_3DA7upqFXp7_hPbWGwgd1lRTEM9uNzW5UV38F6JiI0&usqp=CAU" alt="" width="500">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user">
                                 <div class="form-group row">
                                    <div class="form-group py-3">
                                        <input type="Nama Lengkap" class="form-control form-control-user" id="nama"
                                            placeholder="Nama Lengkap ">
                                    </div>
                                </div>
                                {{-- <div class="form-group row">
                                    <div class="form-group py-3">
                                        <input type="Nama Lengkap" class="form-control form-control-user" id="exampleInputNamaLengkap"
                                            placeholder="Nama Lengkap Address">
                                    </div>
                                </div> --}}
                                <div class="form-group py-3">
                                    <input type="email" class="form-control form-control-user" id="email"
                                        placeholder="Email ">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0 py-3">
                                        <input type="password" class="form-control form-control-user"
                                            id="password" placeholder="Password">
                                    </div>
                                    
                                </div>
                                <a href="login" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="login">Already have an account? Login!</a>
                                </div>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>


</body>

</html>