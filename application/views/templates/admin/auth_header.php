<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->

    <link href="<?php echo site_url() ?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo site_url() ?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">

            <a class="navbar-brand" href="<?php echo base_url() ?>"> <img src="<?php echo base_url(); ?>assets/img/logo.jpg" width="30" height="30" alt=""><span class="ml-2"> MAPAK ALAM</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>merchandise">merchandise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>porfolio">Porfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>artikel">Article</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Program
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>

                    <li class="nav-item ml-auto ">
                        <a class=" btn btn-success tombol rounded-sm mb-1 mt-1 btn-sm" href="<?php echo base_url('auth'); ?>">LOGIN</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="  disabled btn btn-info tombol rounded-sm mt-1 btn-sm" href="#" aria-disabled="true">REGISTER</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 