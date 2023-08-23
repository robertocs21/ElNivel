
<body class="body-cliente">
<div class="cont-header-cliente">
    <div class="cont-header-cursos">
        <img src="build/imgs/logo1.png" class="float-left">
        <h2 class="directorio-title"> Nuevo Curso </h2>
    </div>
</div>
<div class="cont-main-cliente" style="display: flex">
    <form style="width: 60%; padding: 2%" method="POST">
        <ul class="ul">
            <div style="display: flex">
                <li style="width: 100%">
                    <div style="text-align: right">
                        <ul class="ul">
                            <li>
                                <label for="date-inicio" class="label-date">Fecha de Inicio</label>
                                <input type="date" class="input-date" id="date-inicio" name="fecha">
                            </li>
                            <li>
                                <label for="date-inicio" class="label-date">Hora de Inicio</label>
                                <input type="time" class="input-date" id="date-inicio" name="hora">
                            </li>
                            <li>
                                <label for="num-alumnos" class="label-date"> Cupo </label>
                                <input type="number" min="0" class="input-number" id="num-alumnos" name="cupo" required>
                            </li>
                        </ul>
                    </div>
                    <h2>Registro</h2>
                    <p style="color: rgba(73, 73, 73, 0.73)"> Por favor, llene los espacios.</p>
                    <hr>
                </li>
            </div>
            <li style="display: flex">
                <div style="margin-top: 3%; text-align: center; width: 100%">
                    <input type="text" class="input-text" placeholder="Nombre" name="nombre" required>
                    <input type="number" min="0.00" max="10000.00" step="0.01" name="precio" class="input-text" placeholder="Precio del Curso"required/>
                    <input type="text" name="marca" class="input-text" placeholder="Marca"required>
                    <input type="text" name="maestro" class="input-text" placeholder="Maestr@"required>
                    <button type="submit" class="btn-seleccionar-curso"> Crear curso y regresar a Cursos</button>
                </div>
            </li>
        </ul>
    </form>

    <div style="width: 40%; text-align: right; background-image: url('build/imgs/chef.jpg')">
        <button class="btn-cancelar" style="margin: 20px 15px 0 0" onclick="location.href='/cursos'">Cancelar y Regresar</button>
    </div>

</div>

<footer class="cont-footer-direc">
    <p>El Nivel - Materias Primas</p>
</footer>

</body>
</html>