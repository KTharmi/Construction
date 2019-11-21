@extends('estimator/app')
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

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
          <form class="form-inline mr-auto w-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
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

      <div>
      <h1 class="h5 mb-0 text-gray-600">MATERIAL SELECTION</h1>
      <a class="btn btn-primary btn-lg" href="{{route('estimator.estimate.selection')}}" role="button">Select</a>
      </div>

      
      <div>
      <h1 class="h5 mb-0 text-gray-600">DRAP MATERIAL ESIMATION</h1>
      <a class="btn btn-primary btn-lg" href="{{route('estimator.drap.material')}}" role="button">Material Select</a>
      </div>

      <div>
      <h1 class="h5 mb-0 text-gray-600">DRAP WORK ESIMATION</h1>
      <a class="btn btn-primary btn-lg" href="{{route('estimator.drap.workCreate')}}" role="button">Work</a>
      </div>
    

  </div>
  <!-- /.container-fluid -->

  @endsection