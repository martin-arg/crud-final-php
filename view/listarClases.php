<?php
require "./partials/head.php"

?>
    <title>Listar Clases</title>
<?php
include("./partials/header.php")
?>
    <main>
        <?php
        require "./partials/panel.php"

        ?>
        <h1> Clases y Alumnos</h1>

        <table class="table">
            <thead>
            <tr table class="table-success">
                <th>Actividad</th>
                <th>Socio</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            <?php
            require_once ("../dao/ClaseDAO.php");
            $dao = new ClaseDAO();
            $listaClases = $dao->listarClases();

            foreach ($listaClases as $clase) {
                ?>

                <tr class="table-warning">
                    <td><?php echo $clase->getActividadID();?></td>
                    <td><?php echo $clase->getSocioID();?></td>


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