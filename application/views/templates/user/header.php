<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <!-- Link font  -->

    <link rel="icon" href="<?php echo site_url() ?>assets/img/logoW.png" type="image/gif">

    <!-- link css offline-->
    <link rel="stylesheet" href="<?php echo site_url() ?>assets/css/styles.css?v=1.1">
    <link rel="stylesheet" href="<?php echo site_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo site_url() ?>assets/js/js.js">
    <!-- link js&jQ offline-->

    <!-- link bootsrap,Js,JQ Online -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Custom fonts for this template-->
    <link href="<?php echo site_url() ?>assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">





</head>

<body>
    <!-- navbar  -->
    <!-- Image and text -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">

            <a class="navbar-brand" href="<?php echo base_url() ?>"> <img src="<?php echo base_url(); ?>assets/img/logoW.png" width="30" height="30" alt=""><span class="ml-2 "> MAPAK ALAM</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="  nav-link" href="<?php echo base_url() ?>Portofolio">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>merchandise">merchandise</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>artikel">Article</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Program
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo base_url() ?>program/unggulan">Program Unggulan</a>
                            <a class="dropdown-item" href="<?php echo base_url() ?>program/isidentil">Program Isidentil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url() ?>program/pembinaan">Program Pembinaan anggota</a>
                        </div>
                    </li>

                    <li class="nav-item ml-auto ">
                        <a class=" btn btn-success tombol rounded-sm mb-1 mt-1 btn-sm" aria-disabled="true" href="<?php echo base_url('Auth'); ?>">LOGIN</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="  disabled btn btn-info tombol rounded-sm mt-1 btn-sm" href="#" aria-disabled="true">REGISTER</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>