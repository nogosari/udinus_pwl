<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Panel | <?php echo isset($title) ? $title:'';?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #ffdd36;">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Sekolah-Ku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link <?php echo ($title == 'Dashboard') ? 'active':'' ;?>" href="<?php echo base_url()?>Main">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php echo ($title == 'Data Sekolah') ? 'active':'' ;?>" href="<?php echo base_url()?>Main/data_sekolah">Data Sekolah</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>