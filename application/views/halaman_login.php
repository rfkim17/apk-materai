<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman login</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url('template/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url('template/')?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info"
style="
    background-image: url('https://img-video-tracking.ruangguru.com/20190513224955.png');"
>
   

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-9 col-md-5">

                <div class="hidden border-2 shadow-lg my-5">
                    <div class="card-body p-5">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <br>
</br>
                                       
                                        <img class="profile-img" src="template/img/Logo-Kantor-pos.jpg" alt="" width="300px">
      
                                        <br>
</br>

                                        <br>
                                        <h1 class="btn btn-warning btn-user btn-danger">
                                          login
</h1 >
                                        <br>
                                        <br>
</br>
                                    </div>
                                    <form class="user" action="<?=base_url('Login/proses_login') ?>" method="post">
                                        <div class="form-group" >
                                            <input type="text" class=" form-control"
                                                id="exampleInputusername" aria-describedby="usernamelHelp"
                                                placeholder="Enter username Address..." name="username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class=" form-control"
                                                id="exampleInputPassword" placeholder="Password" name="password" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                
                                            </div>
                                        </div>
                                        <button type="submit" class="btn-user btn btn-danger float-right">
                                            Masuk
                                        </button >
                                       
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url('template/')?>vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url('template/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('template/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('template/')?>js/sb-admin-2.min.js"></script>

</body>

</html>