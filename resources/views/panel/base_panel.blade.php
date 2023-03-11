<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XiotoCloud</title>
  
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

  

</body>
</html>