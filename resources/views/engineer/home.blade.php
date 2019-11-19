@extends('engineer/app')
@section('main-contend')

<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>

   

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

     

      <!-- Nav Item - Alerts -->
     

      <!-- Nav Item - Messages -->
      
      <!-- Nav Item - User Information -->
      @include('layouts/nav')

    </ul>

  </nav>
  <!-- End of Topbar -->

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>


    <!-- Content Row -->

    <div class="row">

      <div class="col-xl-8 col-lg-4">
      <!-- <div class="card shadow mb-4"> -->
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
          </div>
          
        </div>
        
    </div>

    

  </div>
  <!-- /.container-fluid -->

  @endsection