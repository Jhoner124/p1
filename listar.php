    <!-- Content Header (Page header) -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Consultar rol
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <table class="table table-striped">
      <tr>
        <th>Rol C&oacute;digo</th>
        <th>Rol Nombre</th>
		<th colspan="2">Acciones</th>
      </tr>
      <?php
        while($listar=mysqli_fetch_object($rol)){
          echo
          "<tr>
            <td>".$listar->rol_codigo."</td>
            <td>".$listar->rol_nombre."</td>
            <td><a class='btn btn-info' href='". getUrl("usuario","rol","modificar",array("rol_codigo"=>$listar->rol_codigo))."'>Editar</a></td>
            <td><a class='btn btn-danger' href='". getUrl("usuario","rol","eliminar",array("rol_codigo"=>$listar->rol_codigo))."'>Eliminar</a></td>
          </tr>";
          }
      ?>
    </table>
	<div class="form-group">
		<div class="col-md-9">
			<label>Buscar Rol</label>
			<input type="text" class="form-control" placeholder="NOMBRE" name="Rol" id="Rol" data-url="<?php echo getUrl("usuario","rol","filtrar");?>">
		</div>
	</div>
	
	<div id="resultado">
		
	</div>