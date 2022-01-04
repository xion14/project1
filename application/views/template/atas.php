<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>APP PISANG</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>desain/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>desain/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?php echo base_url() ?>desain/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <script src="<?php echo base_url() ?>desain/js/jquery.js"></script>


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">APP PISANG</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>">
          <i class="fas fa-fw fa-dashboard"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        <?php echo $this->session->userdata('username') ?>
      </div>
       <?php
            if (!empty($this->session->userdata('username'))){

             if ($this->session->userdata('level')=="Admin"){
            
            ?>
      <!-- Nav Item - Charts -->
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url() ?>show-pengguna">
          <i class="fas fa-fw fa-"></i>
          <span>Pengguna</span></a>
      </li>
      <!-- Nav Item - Charts -->
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url() ?>show-prosedur">
          <i class="fas fa-fw fa-"></i>
          <span>Prosedur</span></a>
      </li>
      <!-- Nav Item - Charts -->
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url() ?>show-daerah">
          <i class="fas fa-fw fa-"></i>
          <span>Daerah</span></a>
      </li>
      <!-- Nav Item - Charts -->
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url() ?>lokasi-saya">
          <i class="fas fa-fw fa-"></i>
          <span>Lokasi Pisang</span></a>
      </li>
      

      <!-- Nav Item - Utilities Collapse Menu
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>MASTER</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url() ?>show-prosedur">Prosedur</a>
            <a class="collapse-item" href="<?php echo base_url() ?>show-daerah">Daerah</a>
            <a class="collapse-item" href="<?php echo base_url() ?>show-lokasi">Lokasi Pisang</a>
          </div>
        </div>
      </li> -->

     <?php
      }else{
        ?>
            <!-- Nav Item - Charts -->
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo base_url() ?>show-prosedur">
            <i class="fas fa-fw fa-"></i>
            <span>Prosedur</span></a>
        </li>
           
            <!-- Nav Item - Charts -->
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo base_url() ?>lokasi-saya">
            <i class="fas fa-fw fa-"></i>
            <span>Lokasi</span></a>
        </li>
        <?php

      }
      ?>
        <!-- Nav Item - Charts -->
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url() ?>logout">
          <i class="fas fa-fw fa"></i>
          <span>Logout</span></a>
      </li>
      <?php
        }
     ?>

     

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
