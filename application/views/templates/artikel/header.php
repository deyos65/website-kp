<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iCONIC.com</title>
        <!-- Link font  -->
        <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">

        <!-- link css offline-->
        <link rel="stylesheet" href="assets/css/styles.css?v=1.1">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- link js&jQ offline-->

        <!-- link bootsrap,Js,JQ Online -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">      
  </head>

<body>
  <!-- navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">      
        <div class="container">
        <a class="navbar-brand" href="<?= base_url();?>">MAPAK ALAM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" 
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                 <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                     <div class="navbar-nav ml-auto">
                       <a class="nav-item nav-link active" href="<?= base_url();?>">Home <span class="sr-only">(current)</span></a></span>          
                         <a class="nav-item nav-link" href="<?= base_url();?>Artikel">Artikel</a>                  
                         <a class="nav-item nav-link active" href="#">Menu Anggota <span class="sr-only">(current)</span></a>
                     </div>
                 </div>
         </div>
     </nav>
  <!-- akhir navbar -->
  <div class="row bg-warning pt-4 pb-2 mt-5">    
    <div class="container col-sm-3  bg-light p-2 ">
    <form action="" method="post">
    <div class="input-group">
    <input type="text" class="form-control" placeholder="Pencarian Artikel...">
    <div class="input-group-append">
    <button class="btn btn-info" type="submit">Search</button>
    <span class="glyphicon glyphicon-star">statsa</span>
    </div>
    </div>
    
    </form>

    </div>
 
    </div>
  

 