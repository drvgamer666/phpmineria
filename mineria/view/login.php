<h3>INICIO</h3>
<hr/>
<?php
if(isset($_SESSION["mensaje"])){
    ?>
    <div class="alert alert-primary" role="alert">
        <?php
        echo $_SESSION["mensaje"];
        $_SESSION["mensaje"] = null;
        ?>
    </div>
    <?php
}
?>
<di class="row">
    <div class="col">
        <form action="<?= CONTEXT_PATH ?>/Session/iniciarSesion" method="post">
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="dreinoso"/>
            </div>
            <div class="form-group">
                <label for="clave">Clave</label>
                <input type="password" class="form-control" id="clave" name="clave" placeholder="Ingrese su clave"/>
            </div>
            <hr/>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="btnIngreso" value="ingresar">
                    Ingresar
                </button>
            </div>
        </form>

    </div>

</di>
