<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/assets/images/favicon.png') }}">
    <title>{{ config('app.name') }}</title>
    <!-- Custom CSS -->
    <link href="{{ asset('backend/assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/libs/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="{{ asset('backend/assets/css/style.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<!-- ============================================================== -->
<!-- Main wrapper -->
<!-- ============================================================== -->
    <div id="main-wrapper">
        
        <!-- Memanggil bagian Header / Topbar yang sudah dipisah -->
        @include('backend/layouts.sidebar')
        
        <!-- ============================================================== -->
        <!-- Page wrapper part -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            
            <!-- ============================================================== -->
            <!-- Bagian Konten Utama Dinamis (Di sinilah konten dari file lain akan masuk) -->
            <!-- ============================================================== -->
            @yield('content')

            <!-- ============================================================== -->
            <!-- Footer part (Tetap dipertahankan di layout utama) -->
            <!-- ============================================================== -->
            <section id="footer" class="footer">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <img class="img-shadow img-fluid" src="{{ asset('backend/assets/images/db.jpg') }}" alt="db">
                        </div>
                        <div class="col-lg-6 offset-lg-1">
                            <h1 class="m-t-40">Create Stunning User Interface for your <span class="font-bold">Application</span> & <span class="font-bold">Products</span> with <span class="text-info"> Nice Admin Pro! </span></h1>
                            <p class="m-t-40"><span class="font-bold text-dark">3+ Dashboard Variations,</span> 900+ Page Templates, Unlimited Color Schemes, <span class="font-bold text-dark">5+ Unique Demos,</span> 500+ UI Elements, 100+ Integrated Plugins & much more...</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- ============================================================== -->
        <!-- End page wrapper -->
        <!-- ============================================================== -->
    </div>
</body>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('backend/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom.js') }}"></script>

</html>