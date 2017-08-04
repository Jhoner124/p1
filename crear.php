    <!-- Content Header (Page header) -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registrar rol
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
  <form name="crearRol" method="POST" action="<?php echo getUrl("usuario","rol","postCrear")?>">
    <div class="form-group">
        <div class="col-md-7">
          <input type="text" class="form-control" id="inputEmail3" placeholder="NOMBRE" name="rol_nombre">
        </div>
    </div>
    <div class="form-group">
      <div class="col-md-7">
        <input type="submit" class="btn btn-info" value="Registrar">
      </div>
    </div>
  </form> hola mundo git