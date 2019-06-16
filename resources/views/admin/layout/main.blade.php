<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield('title','IKO')</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('admintemp/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admintemp/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admintemp/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admintemp/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('admintemp/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('admintemp/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admintemp/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admintemp/vendor/wow/animate.css" rel="stylesheet')}}" media="all">
    <link href="{{asset('admintemp/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admintemp/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admintemp/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admintemp/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('admintemp/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
@include('admin.layout.header')
@yield('content')

        <!-- END PAGE CONTAINER-->


</div>

<!-- Jquery JS-->
<script src="{{asset('admintemp/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{asset('admintemp/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('admintemp/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- Vendor JS       -->
<script src="{{asset('admintemp/vendor/slick/slick.min.js')}}">
</script>
<script src="{{asset('admintemp/vendor/wow/wow.min.js')}}"></script>
<script src="{{asset('admintemp/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{asset('admintemp/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<script src="{{asset('admintemp/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('admintemp/vendor/counter-up/jquery.counterup.min.js')}}">
</script>
<script src="{{asset('admintemp/vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('admintemp/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('admintemp/vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{asset('admintemp/vendor/select2/select2.min.js')}}">
</script>

<!-- Main JS-->
<script src="{{asset('admintemp/js/main.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
</body>

</html>
<!-- end document-->
