
<body class="body-cliente">
<div class="cont-header-cliente">
    <div class="cont-header-cursos">
        <img src="imgs/logo1.png" class="float-left">
    </div>
</div>
<div class="cont-main-cliente" style="display: flex">
    <form style="width: 60%; padding: 2%">
        <ul class="ul">
            <div style="display: flex">
                <li style="width: 100%">
                    <label for="date-registro" class="label-date">Fecha de Inscripción</label>
                    <input type="datetime-local" class="input-date" id="date-registro">
                    <h2>Confirmación</h2>
                    <h3 style="color: rgba(73, 73, 73, 0.73)">Nombre del curso</h3>
                    <hr>
                    <h3 style="color: rgba(73, 73, 73, 0.73)">Precio</h3>
                </li>
            </div>
            <hr>
            <li style="display: flex">

                <div style="margin-top: 3%; text-align: center; width: 100%">
                    <ul class="ul" style="text-align: right; margin-right: 2%">
                        <li>
                            <label for="cant-pago1" class="label-date">Cantidad Pagada</label>
                            <input type="number" class="input-number1" min="0" name="pago1" id="cant-pago1">
                        </li>
                        <li>
                            <label for="date-pago1" class="label-date">Fecha de Pago</label>
                            <input type="datetime-local" class="input-date1" id="date-pago1">
                        </li>
                        <li>
                            <label for="cant-pago2" class="label-date">Cantidad Pendiente</label>
                            <input type="number" class="input-number1" min="0" name="pago2" id="cant-pago2">
                        </li>
                    </ul>
                </div>
            </li>
            <li style="padding: 0 2%; text-align: center; margin-top: 5%">
                <hr>
                <button type="submit" class="btn-modificar-perfil" style="margin-top: 5%"> Guardar y Terminar </button>
            </li>
        </ul>
    </form>

    <div style="width: 40%; text-align: right; background-image: url('imgs/pay.jpg')">
        <button class="btn-cancelar" style="margin: 20px 15px 0 0">Cancelar y Regresar</button>
    </div>

</div>

<footer class="cont-footer-direc">
    <p>El Nivel - Materias Primas</p>
</footer>

</body>
</html>