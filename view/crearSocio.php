<?php
require "./partials/head.php"

?>
<title>Crear Socio</title>
<?php
include("./partials/header.php")
?>

<main>
<form class="row gy-2 gx-3 align-items-center" action="/socioscrear" method="post">
  <div class="col-auto">
    <label class="visually-hidden" for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="email">Corre Electronico</label>
    <div class="input-group">
      <div class="input-group-text">@</div>
      <input type="text" class="form-control" id="email" name="email" placeholder="Correo Electronico">
    </div>
  </div>
        <div class="col-auto">
            <label class="visually-hidden" for="dni">DNI</label>
            <input type="text"  class="form-control" id="dni" name="dni" placeholder="DNI">
        </div>


  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>
</main>

<?php
require("./partials/footer.php")
?>