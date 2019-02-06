<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo SERVERURL;?>/vistas/css/main.css">
</head>
<body>

<?php
require_once "./controladores/vistasControlador.php";
$vt =new vistasControlador();
$vst=$vt->obtener_vista_controlador();
if($vst=="login"){
require_once "contenidos/login-view.php";
}else{
?>
    <!-- SideBar -->
    
	<?php include "vistas/modulos/navlateral.php"; ?>

    <!-- Content page-->
    
	<section class="full-box dashboard-contentPage">

        <!-- NavBar -->
        
        <?php include "vistas/modulos/navbar.php";?>
        
        <!-- Content page -->
        
        <?php
        //aqui se muestra la vista indicada en la url
        require_once $vst;
        ?>
        

        <!-- aqui va el contenido-->
		
	</section>

	<!-- Notifications area -->
     
    <?php include "vistas/modulos/areanotif.php";?>

    <!-- Dialog help -->
    
    <?php include "vistas/modulos/dialoghelp.php";?>
	
    <!--====== Scripts -->
    
    <?php 
}?>
<?php include "vistas/modulos/script.php";?>
	
</body>
</html>