<!doctype html>
<html lang="es">

<head>
  <title>Proyect</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= URL::to("assets/bootstrap/css/bootstrap.css") ?>">

</head>

<body data-urlbase="<?= URL::base() ?>">
  <div class="container">
    <div class="card mt-5">
      <div class="card-header bg-dark text-white">
        <b4-h5>Proyect</b4-h5>

      </div>
      <div class="card-body mt">
        <div class="btn-group">
          <a href="<?= URL::to("/usuarios/form/crear") ?>" class="btn btn-primary">Crear usuario</a>
        </div>
        <hr/>
        <h4 class="card-title mb-4"> Listar usuarios Con AJAX </h4>
        <table class="table table-condensed table-hover table-striped" width="100%" id="tablaListaUsuarios">
          <thead class="bg-dark text-white">
            <tr>
              <th>Nombres</th>
              <th>Direccion</th>
              <th>Teléfono</th>
              <th>Correo</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="6">Consultando...</td>
            </tr>

          </tbody>
        </table>

      </div>

    </div>

  </div>

  <script src="<?= URL::to("assets/plugins/jquery.js") ?>" type="text/javascript"></script>
  <script src="<?= URL::to("assets/bootstrap/js/bootstrap.min.js") ?>" type="text/javascript"></script>
  <script src="<?= URL::to("assets/js/global/helperform.js") ?>" type="text/javascript"></script>
  <script src="<?= URL::to("assets/js/global/rutas.api.js") ?>" type="text/javascript"></script>
  <script src="<?= URL::to("assets/js/global/app.global.js") ?>" type="text/javascript"></script>
  <script src="<?= URL::to("assets/js/modulos/lista.usuarios.js") ?>" type="text/javascript"></script>
  

</body>

</html>