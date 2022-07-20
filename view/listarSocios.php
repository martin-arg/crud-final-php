<?php
require "./partials/head.php"

?>
<title>Listar Socios</title>
<?php
include("./partials/header.php")
?>
<main>
    <?php
    require "./partials/panel.php"

    ?>
<h1>Listado de Socios</h1>
    <table class="table">
        <thead>
        <tr table class="table-success">
            <th>Nombre</th>
            <th>DNI</th>
            <th>Email</th>
            <th>Modificar</th>
            <th>Borrar</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php
        require_once ("../dao/SocioDAO.php");
        $dao = new SocioDAO();
        $listaSocios = $dao->listarSocios();

        foreach ($listaSocios as $socio) {
        ?>
        <tr class="table-warning">
            <td><?php echo $socio->getName();?></td>
            <td><?php echo $socio->getDni();?></td>
            <td><?php echo $socio->getEmail();?></td>
            <td class="text-bg-danger"><a href="modificaSocio.php?id=<?php echo $socio->getSocioID();?>">Modificar Socio</a></td>
            <td class="text-bg-danger"><a href="../controller/borrarSocio.php?id=<?php echo $socio->getSocioID();?>">Borrar Socio</a>></td>
        </tr>
            <?php
            }
        ?>

        </tbody>

    </table>




</main>
<?php
require("./partials/footer.php")
?>