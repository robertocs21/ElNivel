<body class="body-cliente">
<div class="cont-header-cliente">
    <div class="cont-header-cursos">
    <img src="build/imgs/logo1.png" class="float-left" onclick="location.href='/'">
        <h2 class="directorio-title"> Nuevo Cliente </h2>
    </div>
</div>
<div class="cont-main-cliente" style="display: flex">
    <form style="width: 60%; padding: 2%" method="POST">
        <ul class="ul">
            <div style="display: flex">
                <li style="width: 100%">
                    <label for="date-registro" class="label-date">Fecha de Registro</label>
                    <input type="date" class="input-date" id="date-registro" name="fecha">

                    <h2>Registro</h2>
                    <p style="color: rgba(73, 73, 73, 0.73)"> Por favor, llene los espacios.</p>
                    <hr>
                </li>
            </div>
            <li style="display: flex">
                <div style="margin-top: 3%; text-align: center; width: 100%">
                    <input type="text" class="input-text" placeholder="Nombre" name="nombre"required>
                    <input type="text" class="input-text" placeholder="1er Apellido" name="apellido"required>
                    <input type="text" class="input-text" placeholder="2do Apellido" name="sapellido"required>
                    <input type="num" class="input-text" placeholder="Edad" name="edad" min="0"required>
                    <input type="num" class="input-text" placeholder="Teléfono" name="telefono"required>
                    <input type="email" class="input-text" placeholder="e-mail" name="email" required>
                    <button type="submit" class="btn-seleccionar-curso" id="seleccionar" style="display: none"> Seleccionar Curso </button>
                    <button type="submit" class="btn-seleccionar-curso" id="guardar" > Guardar </button>
                    
                </div>
            </li>
        </ul>
        <?php foreach($ultimo as $ult):?>
        <input type="hidden" name = "folio" value="<?php echo s($cliente->folio = $ult->folio+1)?>">
        <?php endforeach;  ?>
    </form>

    <div style="width: 40%; text-align: right; background-image: url('build/imgs/curso1.jpg')">
        <button class="btn-cancelar" style="margin: 20px 15px 0 0" onclick="location.href='/'">Cancelar y Regresar</button>
    </div>

</div>

<footer class="cont-footer-direc">
    <p>El Nivel - Materias Primas</p>
</footer>
<?php 
    $script = "
        <script src='build/js/app.js'></script>
    ";
?>