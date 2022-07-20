
<?php
require "./partials/head.php"

?>
<title>Crear Socio</title>
<?php
include("./partials/header.php")
?>
<main>
    <?php
    require_once("../dao/SocioDAO.php");
    require_once("../model/Socio.php");
    $id = $_GET["id"];
    $socDao = new SocioDAO();
    $socio = $socDao->getSocioxId($id);
    $socioID = $socio.getSocioID();
//    $name = $socio.getName();
//    $dni = $socio.getDni();
//    $email = $socio.getEmail();

    ?>
    <form class="row gy-2 gx-3 align-items-center" action="/socioscrear" method="post">
        <div class="col-auto">
            <label class="visually-hidden" for="id">Nombre</label>
            <input type="text" class="form-control" id="idSocio" name="socio" placeholder="idSocio" value="<?php echo "$socioID" ?>">
        </div>
        <div class="col-auto">
            <label class="visually-hidden" for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php $name ?>">
        </div>
        <div class="col-auto">
            <label class="visually-hidden" for="email">Corre Electronico</label>
            <div class="input-group">
                <div class="input-group-text">@</div>
                <input type="text" class="form-control" id="email" name="email" placeholder="Correo Electronico" value="<?php $dni ?>">
            </div>
        </div>
        <div class="col-auto">
            <label class="visually-hidden" for="dni">DNI</label>
            <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI" value="<?php $email ?>">
        </div>


        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
</main>

<?php
require("./partials/footer.php")
?>
