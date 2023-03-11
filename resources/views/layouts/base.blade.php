<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AyWSolution</title>
    <!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="assets/images/fav-icon/icon.png">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all" />
	<!-- carousel CSS -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" media="all" />	
	<!-- nivo-slider CSS -->
	<link rel="stylesheet" href="assets/css/nivo-slider.css" type="text/css" media="all" />
	<!-- animate CSS -->
	<link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all" />	
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="assets/css/animated-text.css" type="text/css" media="all" />	
	<!-- font-awesome CSS -->
	<link type="text/css" rel="stylesheet" href="../assets/fonts/font-awesome/css/font-awesome.min.css">
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all" />	
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="assets/css/theme-default.css" type="text/css" media="all" />	
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all" />	
	<!-- Main Style CSS -->
	<link rel="stylesheet"  href="style.css" type="text/css" media="all" />
	<!-- transitions CSS -->
	<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css" media="all" />
	<!-- venobox CSS -->
	<link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="all" />
	<!-- widget CSS -->
	<link rel="stylesheet" href="assets/css/widget.css" type="text/css" media="all" />
	<!-- responsive CSS -->
	<link rel="stylesheet" href="../assets/css/responsive.css" type="text/css" media="all" />
	<!-- modernizr js -->	
	<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
	<link rel="stylesheet" href="cdn.jsdelivr.net/npm/bootstrap-icons%401.9.1/font/bootstrap-icons.css">
	
</head>
<body>
    <!-- Loder Start-->
    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
    </div>
    <!-- Loder End -->
    
    @yield('encabezado')

    @yield('content')

    @yield('pie')

    <!-- jquery js -->	
	<script src="assets/js/vendor/jquery-3.2.1.min.js"></script>
	<!-- bootstrap js -->	
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- carousel js -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- counterup js -->
	<script src="assets/js/jquery.counterup.min.js"></script>
	<!-- waypoints js -->
	<script src="assets/js/waypoints.min.js"></script>
	<!-- wow js -->
	<script src="assets/js/wow.js"></script>
	<!-- imagesloaded js -->
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<!-- venobox js -->
	<script src="venobox/venobox.js"></script>
	<!-- ajax mail js -->
	<script src="assets/js/ajax-mail.js"></script>
	<!--  testimonial js -->	
	<script src="assets/js/testimonial.js"></script>
	<!--  animated-text js -->	
	<script src="assets/js/animated-text.js"></script>
	<!-- venobox min js -->
	<script src="venobox/venobox.min.js"></script>
	<!-- isotope js -->
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<!-- jquery nivo slider pack js -->
	<script src="assets/js/jquery.nivo.slider.pack.js"></script>
	<!-- jquery meanmenu js -->	
	<script src="assets/js/jquery.meanmenu.js"></script>
	<!-- jquery scrollup js -->	
	<script src="assets/js/jquery.scrollUp.js"></script>
	<!-- theme js -->	
	<script src="assets/js/theme.js"></script>
	<!-- jquery js -->	
    <!-- theme js -->	
	<script src="assets/js/jquery.barfiller.js"></script>

	<script>
        $(document).ready(function() {
        $('#bar1').barfiller({ duration: 7000 });
        $('#bar2').barfiller({ duration: 7000 });
        $('#bar3').barfiller({ duration: 7000 });
        });
    </script>    
	

</body>
</html>