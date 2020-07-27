<!DOCTYPE html>
<html lang="en">
 <head>
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>@yield('title')</title>
       <link rel="icon" href="img/Fevicon.png" type="image/png">
     <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
     <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
       <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
       <link rel="stylesheet" href="vendors/linericon/style.css">
     <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
     <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
     <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
     <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">

     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">

 </head>

 <body>


   @include('layouts.main_partials.header3')
     
    <main class="py-4">
       @yield('content')
    </main> 
   @include('layouts.main_partials.footer')
   @include('layouts.main_partials.footer_script')

</body>

</html>
