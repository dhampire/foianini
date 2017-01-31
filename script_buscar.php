<div id="row_de_buscador_y_tabla" class="row">
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document" ">
    <div class="modal-content" style="">
      <div class="modal-header" style="">
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body  text-center" ">
        <h3>BUSCANDO... </h3>
        <h4><i class="fa fa-spinner fa-pulse fa-3x fa-fw"" aria-hidden="true"></i></h4>
      </div>
      <div class="modal-footer">
       
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <div class="recursohumano col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
    <div id="search_block" class="panel-body">
      <?php // configuracion del buscador
        $user_db='foianini_espnav';      //usuario BD
        $pass_db='399$slskdeiq@$4322sal_';          // pass BD
        $name_db='foianini_especialistas';       // Nobre BD
        $host_db='localhost'; //Host BD
        $tabla='habilitados';    // Nombre de la tabla con los datos
        $select = 'especialidad';     // Columna de filtrado para llenar select
        $filtro_1='nombre';     // nombre columna de primer filtrado 
        $filtro_2= $select;   // nombre columna de segundo filtrado 
        $c_f_1=$filtro_1;
        $c_f_2=$filtro_2;
        $n_campo1='nombre';   // nombre de columna a visualizar en primer lugar de la tabla
        $n_campo2='especialidad';    // nombre de columna a visualizar en segundo lugar de la tabla
        $n_campo3='telefono';         // nombre de columna a visualizar en tercer lugar de la tabla
        $n_campo4='resumen_curricular';
        $dbh =  new wpdb($user_db,$pass_db,$name_db,$host_db);  // Conexion con BD
        $query = "SELECT DISTINCT $select FROM $tabla" ;          // Query para llenar los options
        $buscador = $dbh->get_results( $query );                // Resultados busqueda
        $num = $dbh->get_row($query);                           // Número de resultados
      ?>

      <legend>Profesionales Habilitados</legend>
      <form id="form" role="form" class="form-horizontal" method="post" action="">
        <div class="form-group">
          <label class="col-xs-12 col-sm-4 control-label" for="filters">Nombre: </label>
          <div class="col-xs-12 col-sm-6">
            <input placeholder="Ingrese el nombre" id="filtro1" value="" name="filtro1" class="form-control" type="text">
          </div>
        </div>
          <div class="form-group">
            <label class="col-xs-12 col-sm-4 control-label" for="filters">Especialidad:</label>
            <div class="col-xs-12 col-sm-6">
              <select class="form-control" id="filtro2" name="filtro2">
                <option value="">Todas las categorias</option>
                <?php if ( $num > 0 ) {
                  foreach ( $buscador as $row ) {
                    echo '<option value="'.$row->$filtro_2.'">'.$row->$filtro_2.'</option>';
                  }
                } ?>
              </select>
            </div>
          </div>
          <div class="button-group col-xs-5 col-xs-offset-3 col-sm-2 col-sm-offset-8">
            <button id="btn_submit" class="btn btn-primary" value="search" name="Buscar" type="button">Buscar</button>
          </div>
      </form>
        <script type="text/javascript">
          $(document).ready(function(){
            $('#btn_submit').click(function(){
                c_f_1= "<?php echo $c_f_1;?>"; // nombre de la columna de filtrado1
                filtro_1 = $('#filtro1').val(); //valor de filtrado1
                c_f_2= "<?php echo $c_f_2;?>"; // nombre de la columna de filtrado2
                filtro_2 = $('#filtro2').val(); //valor de filtrado2
                user_db = "<?php echo $user_db;?>";
                pass_db = "<?php echo $pass_db;?>";
                name_db = "<?php echo $name_db;?>";
                host_db = "<?php echo $host_db;?>";
                tabla   = "<?php echo $tabla;?>";
                n_campo1 = "<?php echo $n_campo1;?>";
                n_campo2 = "<?php echo $n_campo2;?>";
                n_campo3 = "<?php echo $n_campo3;?>";
                n_campo4 = "<?php echo $n_campo4;?>";
                $('#myModal').modal('show')
                      $.post("<?php echo get_template_directory_uri(); ?>/do_search.php", {
                          c_f_1    : c_f_1,
                          c_f_2    : c_f_2,
                          filtro_1 : filtro_1,
                          filtro_2 : filtro_2,
                          user_db : user_db,
                          pass_db : pass_db,
                          name_db : name_db,
                          host_db : host_db,
                          tabla   : tabla,
                          n_campo1: n_campo1,
                          n_campo2: n_campo2,
                          n_campo3: n_campo3,
                          n_campo4: n_campo4,
                      }, function(data) {
                          $("#tabla_result").html(data);
                          $('#myModal').modal('hide')
                      });
                
            });
          });
        </script>
    </div>

    <div id="tabla_result"></div>

  </div>
</div>