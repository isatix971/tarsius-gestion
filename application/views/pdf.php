<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Cotización Prana</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<link rel="shortcut icon" href="contents/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="contents/plugins/bootstrap/css/bootstrap.min.css">
    
<style>
    .intro {
    background-image: url("contents/img/intro-bg.jpg");
    background-position: center;
}
</style>
</head>
    <?php 
      $arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
   'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
      
    $fecha = "Melipilla , ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y') ?>
    <body class="intro">
		<div class="container ">
			<div class="row">
				<div class="col-md-10">
				<img src="contents/img/logoprana.png" width="178" alt="prana_logo.png">
				</div>
                                <div class="col-md-2 text-right">
                                        <em class=""><?php echo $fecha?></em>
                                </div>
                        </div>

			<div class="row">
				<div class="col-md-12">
				<h1>Señores: </h1>
                                <h2><?php echo $nomEmpresa?></h2>
				</div>

			</div>
			<div class="row">
				<div class="col-md-12">
				<p>
				<br><em>Considerando que el recurso agua, es lo más importante en el desarrollo de la vida humana y pensando que hoy en día las personas buscan alternativas sanas y en equilibrio con la naturaleza, nace a fines del año 2004 en Melipilla, "PRANA AGUA PURA Y NATURAL", &nbsp;con el objetivo de producir agua purificada y libre de sodio, para satisfacer las necesidades del mundo moderno.
				<br xmlns="http://www.w3.org/1999/xhtml">
				<br xmlns="http://www.w3.org/1999/xhtml">PRANA es una empresa seria y comprometida, que mantiene una política de alta calidad y seguridad en su producto. Además, es primordial brindar un servicio personalizado a nuestros clientes, y como prueba de ello es la fidelidad de nuestros consumidores.
				<br xmlns="http://www.w3.org/1999/xhtml">Se cuenta con una planta purificadora, que permite realizar el proceso productivo orientado hacia la obtención de un producto de primera calidad. Como resultado se obtiene: agua &nbsp;microfiltrada, esterilizada, ozonificada, libre de sodio, totalmente balanceada y &nbsp;con los minerales que nuestro organismo es capaz de metabolizar (0,13 &nbsp;a &nbsp;0.50 ppm. de Sólidos Totales Disueltos (TDS)), lo que verifica la calidad de nuestro producto, dando la confianza y seguridad que usted necesita. &nbsp;&nbsp;&nbsp;&nbsp;
				<br xmlns="http://www.w3.org/1999/xhtml">
				<br xmlns="http://www.w3.org/1999/xhtml">PRANA, agua pura y natural &nbsp;abastece &nbsp;el área metropolitana con maquinas de frío calor y &nbsp;botellones de 20 litros. Con una capacidad de respuesta de &nbsp;máximo 24 horas. Además se envasa en botellas de 500cc y 1500cc &nbsp;con logo institucional de nuestros clientes, entregándoles a éstos una herramienta de publicidad. 
				<br xmlns="http://www.w3.org/1999/xhtml">
				<br xmlns="http://www.w3.org/1999/xhtml">Finalmente se cuenta con un equipo de profesionales y técnicos de amplia y probada experiencia en el mercado nacional.
				<br xmlns="http://www.w3.org/1999/xhtml">Quedando a su disposición, 
				</em>
				<br>
				<br><em>Cordialmente.<br>Paula Vergara</em>
				</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
				<br><br><br><br>
				<br><strong>Envasadora y Embotelladora Prana Ltda.</strong>
                                    <br>Giro: Purificadora de agua
				<br>Arza #560 / Fono: (2)28316842 
                                    <br> Melipilla - Region Metropolitana
				<br>Web: www.aguaprana.cl &nbsp;Mail:&nbsp;ventas@aguaprana.cl
				</div>
			</div>           
			<br><br><br><br>
                        <div class="row">
				<div class="col-md-10">
				<img src="contents/img/logoprana.png" width="178" alt="prana_logo.png">
				</div>
                                <div class="col-md-2 text-right">
                                        <em class=""><?php echo $fecha?></em>
                                </div>
                        </div>

			<div class="row">
				<div class="col-md-12 text-center text-capitalize">
				<h1>Cotización</h1>
				</div>

			</div>
                        <div class="row">
				<div class="col-md-12 text-left text-capitalize">
                                    <br><strong>Contacto:</strong> <?php echo $nomContacto?> 
                                    <br><strong>Correo:</strong> <?php echo $correo?> 
                                    <br><strong>Telefono:</strong> <?php echo $telefono?>
				</div>

			</div>
                        <div class="row">
				<div class="col-md-12 text-left text-capitalize">
                                    <br>
De nuestra Consideración, es muy grato para nosotros someter a cotización los siguientes productos:
				</div>
                            <br><br>
			</div>

			<div class="row">
				<div class="col-md-12">    
				<table class="table table-striped">
				<thead>
				<tr>
				<th>Cantidad</th>
				<th>Detalle</th>
				<th>Precio Unitario</th>
                                <th>Total</th>
				</tr>
				</thead>
				<tbody>
                                    <?php 
                                    $totalb20 =0;
                                    $totalb10 =0;
                                    $totaldispen =0;
                                    $totaldispenplastico =0;
                                    
                                    if($b20cantidad > 0){
                                        $totalb20 = $b20precio*$b20cantidad;
                                        echo "<tr>"
                                        . "<td>".$b20cantidad."</td>"
                                        . "<td>Botellones Retornables de 20 Litros.</td>"
                                        . "<td>".$b20precio."</td>"
                                        . "<td>".$totalb20."</td>"        
                                        . "</tr>";
                                    }if($b10cantidad > 0){
                                        $totalb10 = $b10precio*$b10cantidad;
                                        echo "<tr>"
                                        . "<td>".$b10cantidad."</td>"
                                        . "<td>Botellas de 10 Litros.</td>"
                                        . "<td>".$b10precio."</td>"
                                        . "<td>".$totalb10."</td>"        
                                        . "</tr>";
                                    
                                    }if($dispencant > 0){
                                        $totaldispen = $dispenprecio*$dispencant;
                                        if($dispenmoda ==1){
                                            $moda = "Arriendo mensual";
                                        }
                                        if($dispenmoda ==2){
                                            $moda = "Venta";
                                        }
                                        if($dispenmoda ==3){
                                            $moda = "En comodato (consumo minimo)";
                                        }
                                        echo "<tr>"
                                        . "<td>".$b10cantidad."</td>"
                                        . "<td>En modalidad de: ".$moda." </td>"
                                        . "<td>".$dispenprecio."</td>"
                                        . "<td>".$totaldispen."</td>"        
                                        . "</tr>";
                                    }
                                    if($dispenplasticocantidad > 0){
                                        $totaldispenplastico= $dispenplasticoprecio*$dispenplasticocantidad;
                                     
                                        echo "<tr>"
                                        . "<td>".$dispenplasticocantidad."</td>"
                                        . "<td>Dispensador plastico de sobremesa</td>"
                                        . "<td>".$dispenplasticoprecio."</td>"
                                        . "<td>".$totaldispenplastico."</td>"        
                                        . "</tr>";
                                    }
                                    $totalneto= $totalb20 + $totalb10 + $totaldispen + $totaldispenplastico;
                                    $iva = $totalneto*0.19;
                                    $resultado= $iva+$totalneto;
                                        echo "<tr>"
                                        . "<td rowspan='3'></td>"
                                        . "<td rowspan='3'>TOTAL </td>"
                                        . "<td>Total Neto</td>"
                                        . "<td>".$totalneto."</td>"
                                        . "</tr>";
                                        
                                        
                                        
                                        echo  "<tr>"
                                        . "<td>iva</td>"
                                        . "<td>".$iva."</td>"
                                        . "</tr>";                                        
                                        echo "<tr>"
                                        . "<td>Total</td>"
                                        . "<td>".$resultado."</td>"
                                        . "</tr>"

                                    
                                    ?>
			
<!--'dispencant' => $_POST['dispencant'],
'dispenmoda' => $_POST['dispenmoda'],
'dispenprecio' => $_POST['dispenprecio'],

'dispenplasticocantidad' => $_POST['dispenplasticocantidad'],
'dispenplasticoprecio' => $_POST['dispenplasticoprecio'],-->
				</tbody>
				</table>
				</div>

			</div>
      			<br><br><br><br>
                        <div class="row">
				<div class="col-md-12 text-center">
				<br><br><br><br>
				<br><strong>Envasadora y Embotelladora Prana Ltda.</strong>
                                    <br>Giro: Purificadora de agua
				<br>Arza #560 / Fono: (2)28316842 
                                    <br> Melipilla - Region Metropolitana
				<br>Web: www.aguaprana.cl &nbsp;Mail:&nbsp;ventas@aguaprana.cl
				</div>
			</div>      
                        <br><br><br><br>
		</div>

	  </body>
</html>