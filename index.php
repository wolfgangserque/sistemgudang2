<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Gudangku</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="app/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="app/vendor/sweetalert/sweetalert2.min.css" rel="stylesheet">


    <link rel="apple-touch-icon" sizes="180x180" href="app/vendor/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="app/vendor/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="app/vendor/favicon/favicon-16x16.png">
    <link rel="manifest" href="app/vendor/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">





</head>

<body class="bg-gradient-primary" style="background-image:url(app/img/warehouse.webp);">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">   Selamat Datang di Aplikasi Gudangku</h1>
                                    </div>
                                    <form class="user" action="config/auth.php" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan Username" name="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Masukan Password" name="password">
                                        </div>
                                        
                                        
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Masuk
                                        </button>
                                        <hr>
                                       
                                    </form>
                                    <hr>
                                   
                                </div>
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
    <script src="app/vendor/sweetalert/sweetalert2.min.js"></script>


</body>


<?php
if (isset ($_GET['error'])){
  $x= ($_GET['error']);
  if($x==1){
    echo "<script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'center-top',
      showConfirmButton: false,
      timer: 3000
    });
    
    Toast.fire({
      icon: 'error',
      title: 'Login Gagal'
    })</script>"; 
  }

  else if($x==2){
    echo "<script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'center-top',
      showConfirmButton: false,
      timer: 3000
    });
    
    Toast.fire({
      icon: 'warning',
      title: 'Silahkan Inputkan Username dan Password'
    })</script>"; 
  }

  else {
    echo '';
  }


}
?>

</html>