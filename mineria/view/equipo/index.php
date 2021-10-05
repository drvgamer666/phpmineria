<?php
if (($data["equipo"])){
    $equipo = $data["equipo"];
   ?>

<h4>Equipos</h4>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">CODIGO</th>
            <th scope="col">FECHA</th>
            <th scope="col">Estado</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($equipo->getEquipo() as $eq){
    ?>
    <tr>
        <td><?=$eq->getIdequipo() ?></td>
        <td><?=$eq-> getNombreEquipo()?></td>
        <td><?=$eq-> getCodigo()?></td>
        <td><?=$eq-> getFecha()?></td>
        <td><?=$eq-> getEstado()?></td>
    </tr>
    <?php
    }
    ?>
    </tbody>
</table>
<?php
} else{
?>
    <p>No se ha creado ningun  equipo actualmente</p>
<?php
}
?>
