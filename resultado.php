<?php
//Si se ha pulsado el botón de buscar 
if (isset($_POST['search'])) {
    //Recogemos las claves enviadas

    $keywords = "";
    $keywords = $_POST['keywords'];


    //Conectamos con la base de datos en la que vamos a buscar

    if ($keywords != "") {
        # code...
    
    $conexion = mysql_connect("localhost", "www360ts_bits", ";wA_Bg)aReJ-");
    mysql_select_db("www360ts_bits", $conexion);

    $query = "SELECT * FROM datos WHERE ci LIKE '%" . $keywords . "%' ";

    $query_searched = mysql_query($query, $conexion);

    $count_results = mysql_num_rows($query_searched);

    //Si ha resultados
    if ($count_results > 0) {

       echo '<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=uft-8">

<title>Imprimir Ticket - Bits and Cream</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<link href="css/normalize.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/imprimir.css" media="print" />
</head>

<body>
	<div id="contenedor">

				<div style="margin-top: 30px"><img src="img/recibido.PNG"></div>

		<div class="recibo">
		<div class="cupon">
			<div style="width:50%; float: left">
			
			<div class="resultado">
				<span class="resultado-fondo"><strong>Nombre:</strong></span>';
        while ($row_searched = mysql_fetch_array($query_searched)) {
            //En este caso solo mostramos el titulo y fecha de la entrada
            echo $row_searched['nombre']. '&nbsp;'.$row_searched['apellidos']. '</div>';
            echo '<div class="resultado"><strong>Direccion:</strong></span>' .$row_searched['direccion']. '</div>';
            echo '<div class="resultado"><strong>Email:</strong></span>' .$row_searched['email']. '</div>';
            echo '<div class="resultado"><strong>Telefono:</strong></span>' .$row_searched['telefono']. '</div>';
            echo '<div class="resultado"><strong>email:</strong></span>' .$row_searched['direccion']. '</div>';
            echo '<div class="resultado"><strong>CI:</strong></span>' .$row_searched['ci']. '&nbsp;'.$row_searched['ciudad'].'</div>';
            echo '<div class="resultado"><strong>Edad:</strong></span>' .$row_searched['edad']. '</div>';
            echo '<div class="resultado"><strong>Sucursal:</strong></span>' .$row_searched['sucursal']. '</div></div>';
            echo '<div style="width:30%; float: right; padding-right: 70px;"><div id="codigo"><h2>' .$row_searched['user']. '</h2></div>';
            echo '<div style="float: right; text-align: end; margin-top:20px"><img width="70%" src="img/logo-bits.png"></div>';
        }
        echo '</div>
		</div></div>
		
		<div class="eliminar">
		<div style="float:left; margin-top:50px; width: 50%">	<img src="img/haz-click.png"> </div>  
		<div style="float: right; margin-top:50px" id="boton">
			
		<input name="" type="image" src="img/imprimir.png" value="Imprimir" onclick="javascript:window.print()" style="cursor:pointer" /></div></div>





</body>
</html>';
    }
    else {
        //Si no hay registros encontrados
        echo '<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Imprimir Ticket - Bits and Cream</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<link href="css/normalize.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/imprimir.css" media="print" />
</head>

<body>
	<div id="contenedor">
<h2>Lo sentimos el Carnet de Identidad ' .$row_searched['ci']. '&nbsp;'.$row_searched['ciudad']. ' no ha sido encontrado </h2>';
	echo '
	<form action="index.php">
	<input name="" type="submit" value="¡Registrate!" style="cursor:pointer" /></form>';
	echo '</div></body></html>';
    }
} else {echo '<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Imprimir Ticket - Bits and Cream</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<link href="css/normalize.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/imprimir.css" media="print" />
</head>

<body>
    <div id="contenedor">
<h2> INGRESA UN NUMERO DE CARNET VALIDO</h2>';
    echo '
    <form action="buscador.php">
    <input name="" type="submit" value="Buscar" style="cursor:pointer" /></form>';
    echo '</div></body></html>'
    ;}
}
?>
