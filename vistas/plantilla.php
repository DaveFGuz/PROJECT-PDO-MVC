<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <!-- SideBar -->
    
	<?php include "modulos/navlateral.php"; ?>

    <!-- Content page-->
    
	<section class="full-box dashboard-contentPage">

        <!-- NavBar -->
        
        <?php include "modulos/navbar.php";?>
        
        <!-- Content page -->
        
        <?php include "contenidos/home-view.php"; ?>
        

        <!-- aqui va el contenido-->
		
	</section>

	<!-- Notifications area -->
     
    <?php include "modulos/areanotif.php";?>

    <!-- Dialog help -->
    
    <?php include "modulos/dialoghelp.php";?>
	
    <!--====== Scripts -->
    
    <?php include "modulos/script.php";?>
	
</body>
</html>