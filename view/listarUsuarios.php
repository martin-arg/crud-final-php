<?php
require "./partials/head.php"

?>
<title>Listar Usuarios</title>
<?php
include("./partials/header.php")
?>
<main>
    <?php
    require "./partials/panel.php"

    ?>
    <h1>Listado de usuarios del sistema</h1>

    <table class="table">
        <thead>
        <tr table class="table-success">
            <th>Usuario</th>
            <th>Rol</th>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
        <tbody class="table-group-divider">
        <?php
        require_once ("../dao/UsuarioDAO.php");
        $dao = new UsuarioDAO();
        $listaUsuarios = $dao->listarUsuarios();

        foreach ($listaUsuarios as $usuario) {
            ?>
        <tr class="table-warning">
            <td><?php echo $usuario->getUsuario();?></td>
            <td><?php echo $usuario->getRol();?></td>
            <td><?php echo $usuario->getNombre();?></td>
            <td><?php echo $usuario->getApellido();?></td>
        </tr>
        <?php
            }
        ?>
        </tbody>
        </thead>
    </table>
</main>
<?php
require("./partials/footer.php")
?>
