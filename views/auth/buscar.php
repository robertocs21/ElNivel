<body class="body-cliente">
<div class="cont-header-cliente">
    <div class="cont-header-cursos">
    <img src="build/imgs/logo1.png" class="float-left" onclick="location.href='/'">
        <h2 class="directorio-title"> Buscar Clientes </h2>
    </div>
</div>
<div class="cont-main-cliente" style="display: flex">
    <form style="width: 60%; padding: 2%" method="POST">
        <ul class="ul">
            <div style="display: flex">
                <li style="width: 100%">
                    <h2>Datos</h2>
                    <p style="color: rgba(73, 73, 73, 0.73)"> Por favor, llene los espacios necesarios.</p>
                    <hr>
                </li>
            </div>
            <li style="display: flex">
                <div style="margin-top: 3%; text-align: center; width: 100%">
                    <input type="text" class="input-text" placeholder="Nombre" name="nombre" >
                    <input type="text" class="input-text" placeholder="Apellido(s)" name="apellido">

                    <button type="submit" class="btn-seleccionar-curso"> Buscar Cliente </button>
                </div>
            </li>
        </ul>
    </form>

    <div style="width: 40%; text-align: right; background-image: url('build/imgs/pan.jpg')">
        <button class="btn-cancelar" style="margin: 20px 15px 0 0" onclick="location.href='/'">Cancelar y Regresar</button>
    </div>

</div>

<footer class="cont-footer-direc">
    <p>El Nivel - Materias Primas</p>
</footer>
