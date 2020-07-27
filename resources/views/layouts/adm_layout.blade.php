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
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendorAdm/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendorAdm//font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendorAdm//mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendorAdm//bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendorAdm//animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendorAdm//bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendorAdm//css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendorAdm//slick/slick.css" rel="stylesheet" media="all">
    <link href="vendorAdm//select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendorAdm//perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">

<div id="wrapper">
       <!-- Navigation -->
       <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
         @include('layouts.adm_partial.sidebar')    
         @include('layouts.adm_partial.header_adm')
        </nav>
       <!-- <div id="page-wrapper">          -->
       <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container">
                    @yield('content')
                    </div>
                </div>
        </div>    
        
        <!-- </div>    -->
</div>

       
      
    <!-- Jquery JS-->
    <script src="vendorAdm/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendorAdm/bootstrap-4.1/popper.min.js"></script>
    <script src="vendoraAdm/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendorAdm/slick/slick.min.js">
    </script>
    <script src="vendorAdm/wow/wow.min.js"></script>
    <script src="vendorAdm/animsition/animsition.min.js"></script>
    <script src="vendorAdm/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendorAdm/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendorAdm/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendorAdm/circle-progress/circle-progress.min.js"></script>
    <script src="vendorAdm/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendorAdm/chartjs/Chart.bundle.min.js"></script>
    <script src="vendorAdm/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/adm_main.js"></script>

</body>

</html>
<!-- end document-->
