<!doctype html>
<html lang="es">

<head>
  <title>Proyect</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  
  <link rel="stylesheet" href="<?= URL::to("assets/bootstrap/css/bootstrap.css") ?>">
  <link rel="stylesheet" href="<?= URL::to("assets/plugins/sweetalert/sweetalert.css") ?>">

</head>

<body data-urlbase="<?= URL::base() ?>">
  <div class="container">
    <div class="card mt-5">
      <div class="card-header bg-dark text-white">
        <b4-h5><?= isset($titulo) ? $titulo :"Insertar con Ajax"?></b4-h5>

      </div>
      <div class="card-body mt">
        <div class="btn-group">
          <a href="<?= URL::base() ?>" class="btn btn-primary">Listar usuarios</a>
        </div>
        <hr/>
        <h4 class="card-title mb-4"><?= isset($titulo) ? $titulo :"Insertar con Ajax"?></h4>
        <form id="formUsuario" action="usuarios/registrar" method="POST">

          <?php if (isset($idUsuario)): ?>
            <input type ="hidden" id="idUsuario" value="<?= $idUsuario ?>"/> 
          <?php endif;  ?>


            <div class="form-group">
              <label for="nombres">Nombre(*):</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="" required="required" >
              <small id="helpId" class="text-muted">Ingrese su Nombre</small>
            </div>
            <div class="form-group">
              <label for="adress">Dirección(*):</label>
              <input type="text" name="adress" id="adress" class="form-control" placeholder="" required="required" >
              <small id="helpId" class="text-muted">Ingrese su Dirección</small>
            </div>
            <div class="form-group">
              <label for="phone">Teléfono:</label>
              <input type="number" name="phone" id="phone" class="form-control" placeholder="">
              <small id="helpId" class="text-muted">Ingrese su Teléfono</small>
            </div>
            <div class="form-group">
              <label for="email">Email(*):</label>
              <input type="text" name="email" id="email" class="form-control" required="required" >
              <small class="text-muted">Ingrese su Email</small>
            </div>
            <div class="form-group text-right">
            <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            
        
        </form>
      </div>

    </div>

  </div>

  <script src="<?= URL::to("assets/plugins/jquery.js") ?>" type="text/javascript"></script>
  <script src="<?= URL::to("assets/bootstrap/js/bootstrap.min.js") ?>" type="text/javascript"></script>
  <script src="<?= URL::to("assets/js/global/helperform.js") ?>" type="text/javascript"></script>
  <script src="<?= URL::to("assets/js/global/rutas.api.js") ?>" type="text/javascript"></script>
  <script src="<?= URL::to("assets/js/global/app.global.js") ?>" type="text/javascript"></script>
  <script src="<?= URL::to("assets/plugins/sweetalert/sweetalert.js") ?>" type="text/javascript"></script>
  <script src="<?= URL::to("assets/js/modulos/registrar.usuarios.js") ?>" type="text/javascript"></script>
  

</body>

</html>

