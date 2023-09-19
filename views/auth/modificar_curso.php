<body class="body-cliente">
<div class="cont-header-cliente">
    <div class="cont-header-cursos">
    <img src="build/imgs/logo1.png" class="float-left" onclick="location.href='/'">
        <h2 class="directorio-title"> Nuevo Curso </h2>
    </div>
</div>
<div class="cont-main-cliente" style="display: flex">
<form action="/modificar_curso?id=<?php echo $resultado->id; ?>&eliminado=<?php echo $resultado->eliminado; ?>" style="width: 60%; padding: 2%" method="POST">

        <ul class="ul">
            <div style="display: flex">
                <li style="width: 100%">
                    <div style="text-align: right">
                        <ul class="ul">
                            <li>
                                <label for="date-inicio" class="label-date">Fecha de Inicio</label>
                                <input type="date" class="input-date" id="date-inicio" name ="fecha"value=<?php echo $resultado->fecha?>>
                            </li>
                            <li>
                                <label for="date-inicio" class="label-date">Hora de Inicio</label>
                                <input type="time" class="input-date" id="date-inicio" name ="hora"value=<?php echo $resultado->hora?>>
                            </li>
                            <li>
                                <label for="num-alumnos" class="label-date"> Cupo </label>
                                <input type="number" min="0" class="input-number" id="num-alumnos" name = "cupo" value=<?php echo $resultado->cupo?>>
                            </li>
                        </ul>
                    </div>
                    <h2>Nombre del Curso</h2>
                    <hr>
                </li>
            </div>
            <li style="display: flex">
                <div style="margin-top: 3%; text-align: center; width: 100%">
                    <input type="text" class="input-text" placeholder="Nombre" name="nombre" value=<?php echo $resultado->nombre?>>
                    <input type="number" min="0.00" max="10000.00" step="0.01" name="precio" class="input-text" placeholder="Precio del Curso" value=<?php echo $resultado->precio?>>
                    <input type="text" name="marca" class="input-text" placeholder="Marca" value=<?php echo $resultado->marca?>>
                    <input type="text" name="maestro" class="input-text" placeholder="Maestr@" value=<?php echo $resultado->maestro?>>
                    <button type="button" class="btn-seleccionar-curso" id="eliminar-curso" onclick="document.getElementById('eliminar-form').submit();"> Eliminar Curso</button>
                    <button type="submit" class="btn-seleccionar-curso"> Guardar</button>
                    <input type="hidden" name="eliminado" id="eliminado" value="<?php echo $resultado->eliminado ?>" data-eliminado="<?php echo $resultado->eliminado ?>">
                    
                    
                </div>
            </li>
        </ul>
    </form>
    <form action="/modificar_curso?id=<?php echo $resultado->id; ?>" method="POST" id="eliminar-form" style="display: none">
    <input type="hidden" name="eliminado" value="1">
    <input type="hidden" class="input-text" placeholder="Nombre" name="nombre" value=<?php echo $resultado->nombre?>>
    <input type="hidden" min="0.00" max="10000.00" step="0.01" name="precio" class="input-text" placeholder="Precio del Curso" value=<?php echo $resultado->precio?>>
    <input type="hidden" name="marca" class="input-text" placeholder="Marca" value=<?php echo $resultado->marca?>>
    <input type="hidden" name="maestro" class="input-text" placeholder="Maestr@" value=<?php echo $resultado->maestro?>>
    <input type="hidden" class="input-date" id="date-inicio" name ="fecha"value=<?php echo $resultado->fecha?>>
    <input type="hidden" min="0" class="input-number" id="num-alumnos" name = "cupo" value=<?php echo $resultado->cupo?>>
    <input type="hidden" class="input-date" id="date-inicio" name ="hora"value=<?php echo $resultado->hora?>>
</form>

    <div style="width: 40%; text-align: right; background-image: url('build/imgs/chef.jpg')">
        <button class="btn-cancelar" style="margin: 20px 15px 0 0" onclick="location.href='/cursos'">Regresar</button>
    </div>

</div>

<footer class="cont-footer-direc">
    <p>El Nivel - Materias Primas</p>
</footer>

<?php 

