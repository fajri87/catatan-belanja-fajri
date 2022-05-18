<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Catatan Belanja - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <br />
                            <h1 class="h3 text-gray-900 text-center">Selamat datang di catatan
                                Belanja</h1>
                            <br />
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <img src="img/logo.png" alt="Responsive image" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h5 text-gray-900 mb-2">Masukkan NISN dan Nama Lengkap</h1>
                                </div>
                                <form class="user" method="post" action="do_login.php">
                                    <div class="form-group">
                                        <input type="text" name="nisn" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan NISN anda">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="nama_lengkap" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan nama lengkap anda">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        
                                        Login <i class="fa fa-key"></i>
                                    </button>
                                    <a href="register.php" class="btn btn-facebook btn-user btn-block">

                                        Belum punya akun..? Silahkan daftarkan diri anda!
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </form>

                            </div>
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

</body>

</html>