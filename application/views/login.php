<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Sensor Lingkungan PT Pupuk Sriwidjaja Palembang</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>img/logo-pusri.png" type="image/x-icon">
</head>

<body class="bg-image" style="background-image: url('<?= base_url('assets/') ?>img/pabdrik-pusri.png'); background-repeat: no-repeat; background-attachment: fixed; background-position: center;font-family: 'Poppins', sans-serif;">
    <div class="header container mt-5">
        <div class="header col-xl-5 m-auto p-3 text-center shadow-sm" style="border-radius: 40px;">
            <img src="<?= base_url('assets/') ?>img/logo-pusri.png" class="img-logo-header mr-4" style="width: 40px;">
            <img src="<?= base_url('assets/') ?>img/pupuk-indonesia.png" class="img-logo-header mr-2" style="width: 100px;">
        </div>


        <!-- Outer Row -->
        <div class="row d-plex justify-content-between mt-2">
            <div class="col-xl-5 col-lg-5 col-md-5 m-auto">
                <div class="card o-hidden border-0 shadow-lg my-5" style="border-radius: 40px;">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12 bg-light">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h3 class="h3 text-gray-900 mb-4 font-weight-bold">Login</h3>

                                    </div>

                                    <?php $error = $this->session->flashdata('message');
                                    if ($error) { ?>
                                        <div class="alert alert-danger alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <?php echo $error; ?>
                                        </div>
                                    <?php } ?>

                                    <form class="user" action="<?php echo site_url('Login/login'); ?>" method="post">
                                        <div class="form-group">
                                            <input required autocomplete="off" type="text" class="form-control form-control-user" id="exampleInputUser" placeholder="Username" name="username" />
                                        </div>
                                        <div class="form-group">
                                            <input required autocomplete="off" type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password" />
                                        </div>
                                        <button name="submit" type="submit" class="btn btn-primary btn-user btn-block"><i class="fas fa-fw fa-sign-in-alt mr-1"></i> Masuk</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>
</body>

</html>