<!doctype html>
<html lang="en">
    <head>
    @include('user/layouts/head')
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
        @include('user/layouts/header')
        </header>
        <!--================Header Menu Area =================-->
        <!-- Main Content -->
        <div class="content-wrapper">
        @section('main-contend')
        @show
        </div>
    <!--================ start footer Area  =================-->	
        

      <!-- Footer -->
      @include('user/layouts/footer')
    </body>
</html>
