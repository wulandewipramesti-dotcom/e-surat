<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Surat | Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('sbadmin2/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('sbadmin2/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">
                                        <i class="fas fa-envelope mr-2"></i> E-Surat | Login
                                    </h1>
                                </div>

                                <?php if(session()->getFlashdata('error')): ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?= session()->getFlashdata('error') ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif; ?>

                                <form class="user" method="post" action="<?= base_url('login/auth') ?>">
                                    <?= csrf_field() ?>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                               placeholder="Enter Email Address..." name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                               placeholder="Password" name="password" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>

                                    <a href="#" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                </form>

                                <hr>
                                <div class="text-center">
                                    <small>
                                        Kembali ke beranda
                                        <a href="<?= base_url('/') ?>">Klik di sini</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('sbadmin2/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('sbadmin2/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
<script src="<?= base_url('sbadmin2/js/sb-admin-2.min.js'); ?>"></script>

</body>
</html>
