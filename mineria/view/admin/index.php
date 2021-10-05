<form action="<?= CONTEXT_PATH ?>/Usuario/registrarUsuario" method="post">

    <div class="form-group">
        <label for="tipoDocumento">Tipo Documento</label>
        <select id="tipoDocumento" name="tipoDocumento" class="form-control">
            <?php
            if (isset($data["tipoDocumento"])) {
                foreach ($data["tipoDocumento"] as $tipoDocumento) {
                    echo "<option value='" . $tipoDocumento->getIdtipoDocumento(). "'>" . $tipoDocumento->getNombreTipo() . "</option>";
                }
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="tipoEmpleado">Tipo Empleado</label>
        <select id="tipoEmpleado" name="tipoEmpleado" class="form-control">
            <?php
            if (isset($data["tipoEmpleado"])) {
                foreach ($data["tipoEmpleado"] as $tipoEmpleado) {
                    echo "<option value='" . $tipoEmpleado->getIdtipoEmpleado(). "'>" . $tipoEmpleado->getTipoEmpleadocol() . "</option>";
                }
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="tipoRol">Tipo Rol</label>
        <select id="tipoRol" name="tipoRol" class="form-control">
            <?php
            if (isset($data["rol"])) {
                foreach ($data["rol"] as $rol) {
                    echo "<option value='" . $rol->getIdrol(). "'>" . $rol->getNombreRol() . "</option>";
                }
            }
            ?>
        </select>
    </div>


    <div class="form-group">
        <label for="numeroDocumento">Numero documento</label>
        <input type="text" class="form-control" id="numeroDocumento" name="numeroDocumento"
               placeholder="123456789"/>
    </div>
    <div class="form-group">
        <label for="nombres">Nombres</label>
        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Carlos Iván"/>
    </div>
    <div class="form-group">
        <label for="apellidos">Apellidos</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Rodriguez"/>
    </div>
    <div class="form-group">
        <label for="correo">Correo</label>
        <input type="text" class="form-control" id="correo" name="correo" placeholder="Rodriguez"/>
    </div>
    <div class="form-group">
        <label for="username">Nombre usuario</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Rodriguez"/>
    </div>
    <div class="form-group">
        <label for="clave">Clave</label>
        <input type="text" class="form-control" id="clave" name="clave" placeholder="Rodriguez"/>
    </div>

    <hr/>
    <div class="form-group">
        <button type="submit" class="btn btn-primary" name="btnRegistroPersona" value="registrar">
            Guardar
        </button>
    </div>
</form>