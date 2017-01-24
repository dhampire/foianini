<?php global $wpdb, $table_prefix;
    if(!isset($wpdb)){
        require_once('../../../wp-config.php');
        require_once('../../../wp-includes/wp-db.php');
    }
    $n_filtro1 = $_POST['c_f_1']; //nombre de la columna1
    $n_filtro2 = $_POST['c_f_2']; //nombre de la columna2
    $filtro1 = $_POST['filtro_1']; //valor de la columna1
    $filtro2 = $_POST['filtro_2']; //valor de la columna2
    $user_db = $_POST['user_db'];
    $pass_db = $_POST['pass_db'];
    $name_db = $_POST['name_db'];
    $host_db = $_POST['host_db'];
    $tabla   = $_POST['tabla'];
    $n_campo1= $_POST['n_campo1']; //nombre de campo 1 para tabla
    $n_campo2= $_POST['n_campo2']; //nombre de campo 2 para tabla
    $n_campo3= $_POST['n_campo3']; //nombre de campo 3 para tabla
    $dbh =  new wpdb($user_db,$pass_db,$name_db,$host_db); 
    if(($filtro1==NULL)&&($filtro2==NULL)) {
        echo "<p>Mostrando todos los registros</p>";
        $query = "SELECT * FROM $tabla";
    } else if((!$filtro1==NULL)&&($filtro2==NULL)) {
        $query = "SELECT * FROM $tabla WHERE $n_filtro1 LIKE '%$filtro1%'";
    } else if(($filtro1==NULL)&&(!$filtro2==NULL)) {
        $query = "SELECT * FROM $tabla WHERE $n_filtro2 LIKE '$filtro2%'";
    }else {
        $query = "SELECT * FROM $tabla WHERE $n_filtro1 LIKE '%$filtro1%' AND $n_filtro2 LIKE '$filtro2'";
    }
    $row = $dbh->get_results( $query );
    if(count($row)) {

        echo "<table class='table table-striped'>"; // aplicar aqui esltilos para la tabla p.ej. table-condensed o style="background:red"
        echo "  <thead>";                           //cabecera de la tabla
        echo "      <tr>";
        echo "          <th>Nombre y Apellidos</th>";        
        echo "          <th>Especialiad</th>";
        echo "          <th>Teléfono</th>";
        echo "      </tr>";
        echo "  </thead>";
        echo "  <tbody>";
    
        foreach($row as $resultado) {               //bucle de resultados
            $res1=$resultado->$n_campo1;
            $res2=$resultado->$n_campo2;
            $res3=$resultado->$n_campo3;

            echo "      <tr>";
            echo "          <th>$res1</th>";
            echo "          <th>$res2</th>";
            echo "          <th>$res3</th>";
            echo "      </tr>";
        }
        echo "  </tbody>";
        echo "</table>";
    }else{ // si no hay resultados, no se crea la tabla
        echo '<p style="color:red"><b><u><i>No se han encontrado resultados que coincidan con los criterios de búsqueda"</i></u></b></p>';
    }
?>