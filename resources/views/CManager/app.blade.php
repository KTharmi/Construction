<!DOCTYPE html>
<html lang="en">

<head>
@include('dashboard/head')

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('CManager/side')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    @section('main-contend')
 @show

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @include('dashboard/footer')

</body>

</html>
