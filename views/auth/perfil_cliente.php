
<body class="body-cliente">
<div class="cont-header-cliente">
    <div class="cont-header-cursos">
    <img src="build/imgs/logo1.png" class="float-left" onclick="location.href='/'">
        <h2 class="directorio-title"> Perfil de Cliente </h2>
    </div>
</div>
<div class="cont-main-cliente" style="display: flex">
    <form style="width: 60%; padding: 2%" method = "POST">
        <ul class="ul">
            <div style="display: flex">
                <li style="width: 100%">
                    <label for="date-registro" class="label-date">Fecha de Registro</label>
                    <input type="date" class="input-date" id="date-registro" name="fecha"value="<?php echo $resultado->fecha?>">
                    <h2>Datos Personales</h2>
                    <hr>
                </li>
            </div>
            <li style="padding: 0 2%; display: flex; text-align: center">
                <button type="button" class="btn-modificar-perfil" onclick="location.href='/modificar_cursos_inscritos?id=<?php echo $resultado->id?>&nombre=<?php echo $resultado->nombre?>&apellido=<?php echo $resultado->apellido?>&folio=<?php echo $resultado->folio?>'"> Cursos inscritos </button>
                <button type="button" class="btn-modificar-perfil" onclick="location.href='/estado_cuenta?id=<?php echo $resultado->id?>&nombre=<?php echo $resultado->nombre?>&apellido=<?php echo $resultado->apellido?>'"> Estado de Cuenta </button>
            </li>
            <hr>
            <li style="display: flex">
                <div style="margin-top: 3%; text-align: center; width: 100%">
                    <input type="text" class="input-text" placeholder="Nombre" name="nombre" value="<?php echo $resultado->nombre?>">
                    <input type="text" class="input-text" placeholder="1er Apellido" name="apellido" value="<?php echo $resultado->apellido?>">
                    <input type="text" class="input-text" placeholder="2do Apellido" name="sapellido" value="<?php echo $resultado->sapellido?>">
                    <input type="number" class="input-text" placeholder="Edad" name="edad" min="0" value="<?php echo $resultado->edad?>">
                    <input type="tel" class="input-text" placeholder="Teléfono" name="telefono" value="<?php echo $resultado->telefono?>">
                    <input type="email" class="input-text" placeholder="e-mail" name="email" value="<?php echo $resultado->email?>">
                </div>
            </li>
            <li style="padding: 0 2%; text-align: center">
                <button type="submit" class="btn-modificar-perfil"> Modificar </button>
            </li>
        </ul>
        </form>

    <div style="width: 40%; text-align: right; background-image: url('build/imgs/chef2.jpg')">
        <button class="btn-cancelar" style="margin: 20px 15px 0 0" onclick="location.href='/'">Cancelar y Regresar</button>
    </div>

</div>

<footer class="cont-footer-direc">
    <p>El Nivel - Materias Primas</p>
</footer>

</body>
</html>