<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Color Admin | E-Commerce Front End Theme</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN core-css ================== -->
	
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('assets/css/e-commerce/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/e-commerce/app.min.css') }}" rel="stylesheet" />

    <!-- ================== END core-css ================== -->
</head>

<body>
    <!-- BEGIN #page-container -->
    <div id="page-container" class="fade show">

        <!-- BEGIN #header -->
        @include('layouts.includes.header')
        <!-- END #header -->

        <!-- Begain Main Content -->
        @yield('content')
        <!-- End Main Content -->
        <!-- BEGIN #footer -->
        @include('layouts.includes.footer')
        <!-- END #footer -->


    </div>
    <!-- END #page-container -->   

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('assets/js/e-commerce/app.min.js') }}"></script>
	<script src="{{ asset('assets/js/e-commerce/vendor.min.js') }}"></script>


</body>

</html>
