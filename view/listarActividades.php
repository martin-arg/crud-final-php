<?php
require "./partials/head.php"

?>
<title>Listar Actividades</title>
<?php
include("./partials/header.php")
?>
<main>
    <?php
    require "./partials/panel.php"

    ?>
    <h1> Actividades</h1>

<table class="table">
 <thead>
<tr table class="table-success">
    <th>Actividad</th>
    <th>Responsable</th>
    <th>Dias</th>
    <th>Horarios</th>
    <th>Cant Max</th>
</tr>
 </thead>
<tbody class="table-group-divider">
<?php
require_once ("../dao/ActividadDAO.php");
$dao = new ActividadDAO();
$listaActividades = $dao->listarActividades();

foreach ($listaActividades as $actividad) {
    ?>

<tr class="table-warning">
<td><?php echo $actividad->getActividad();?></td>
<td><?php echo $actividad->getResponsableID();?></td>
<td><?php echo $actividad->getDias();?></td>
<td><?php echo $actividad->getHorario();?></td>
<td><?php echo $actividad->getAsistentesMax();?></td>

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