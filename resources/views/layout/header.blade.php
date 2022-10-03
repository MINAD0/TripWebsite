<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TripMaroc</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2/dist/sweetalert2.min.js"></script>


    <!-- fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- custom css file -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/trajet.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('/images/favicon.png') }}">
    <!-- custom js file -->
    <script src="{{asset('js/script.js')}}" defer></script>

</head>
<body>
    <!-- START header section -->
    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#" class="logo"><i class="fa-solid fa-route"></i>TripM3ana</a>

        <nav class="navbar">
            <a data-aos="zoom-in-left" data-aos-delay="300"  href="{{route('north')}}">Home</a>
            <a data-aos="zoom-in-left" data-aos-delay="450" href="#destination">Campings</a>
            <a data-aos="zoom-in-left" data-aos-delay="450" href="#tool">Trip Tool</a>
            <!-- <a data-aos="zoom-in-left" data-aos-delay="600" href="#help" title="Help Us To Find New destinations">Help Us</a> -->
            <a data-aos="zoom-in-left" data-aos-delay="750" href="#team">Team</a>
        </nav>


        <a data-aos="zoom-in-left" data-aos-delay="1300" href="#contact" class="btn">Contact Us</a>
    </header>
    <!-- END header section -->
