
<body class="body-cliente">
<div class="cont-header-cliente">
    <div class="cont-header-cursos">
    <img src="build/imgs/logo1.png" class="float-left" onclick="location.href='/'">
    </div>
</div>
<div class="cont-main-cliente" style="display: flex">
    <form style="width: 60%; padding: 2%">
        <ul class="ul">
            <div style="display: flex">
                <li style="width: 100%">
                    <label for="date-registro" class="label-date">Fecha de Inscripción</label>
                    <input type="datetime-local" class="input-date" id="date-registro">
                    <h2>Estado de Cuenta</h2>
                    <h3 style="color: rgba(73, 73, 73, 0.73)">Andrea Núñez</h3>
                </li>
            </div>
            <hr>
            <li style="display: flex">
                <div style="margin-top: 3%; text-align: center; width: 100%">
                    <table style="width: 100%">
                        <tr>
                            <th>
                                Estatus de Pagos
                            </th>
                            <th>
                                <select class="select-estado">
                                    <option value="regular">Regular</option>
                                    <option value="strasado">Atrasado</option>
                                </select>
                            </th>
                        </tr>
                    </table>
                </div>
            </li>
            <h1 style="color: red">Que salga lo que debe de cada curso si es que debe</h1>
            <hr>
            <li>
                <h3>Pagos Pendientes</h3>
                <div style="margin-top: 3%; text-align: center; width: 100%">
                    <table style="width: 100%; text-align: left;">
                        <tr>
                            <hr style="height:1px;border-width:0;color: #0c3f6b;background-color: #0c3f6b">
                            <th>
                                Curso
                            </th>
                            <th>
                                Pago Pendiente
                            </th>
                        </tr>
                        <tr style="color: rgb(117,117,117)">
                            <th>
                                <input class="input-text" placeholder="De este Curso" style="color: black">
                            </th>
                            <th>
                                <input class="input-text" placeholder="Debe Tanto" style="color: black">
                            </th>
                        </tr>
                    </table>
                </div>
            </li>
            <li style="padding: 0 2%; text-align: center; margin-top: 5%">
                <hr>
                <button type="submit" class="btn-modificar-perfil" style="margin-top: 5%"> Guardar y Terminar </button>
                <button type="submit" class="btn-modificar-perfil" style="margin-top: 5%"> Cancelar y Regresar </button>
            </li>
        </ul>
    </form>

    <div style="width: 40%; text-align: right; background-image: url('imgs/chef3.jpg')">
    </div>

</div>

<footer class="cont-footer-direc">
    <p>El Nivel - Materias Primas</p>
</footer>

</body>
</html>