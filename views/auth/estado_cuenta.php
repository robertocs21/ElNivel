<style>
.input-text2{
    border-radius: 5px;
    border: none;
    width: 40%;
    padding: 2% 10%;
    font-family: "ITC Benguiat Gothic", sans-serif;
    background-color: rgba(73, 73, 73, 0.17);
    margin-bottom: 3%
    text-align: right;
    box-shadow: 1px 1px 1px 1px rgba(89, 155, 255, 0.2);
}
.btn-modificar-perfil{
    padding: 2%;
    width: 80%;
    border-radius: 10px;
    border: none;
    margin: 3% 4%;
    font-family: "ITC Benguiat Gothic", sans-serif;
    transition: 800ms;
    background-color: #cbcbcb;
    box-shadow: 0 1px 1px 0 black;
}
</style>
<body class="body-cliente">
    <div class="cont-header-cliente">
        <div class="cont-header-cursos">
        <img src="build/imgs/logo1.png" class="float-left" onclick="location.href='/'">
        </div>
    </div>

    <div class="cont-main-cliente" style="display: flex">
        <div style="width: 60%; padding: 2%">
            <ul class="ul">
                <div style="display: flex">
                    <li style="width: 100%">
                        <h2>Estado de Cuenta</h2>
                        <h3 style="color: rgba(73, 73, 73, 0.73)"><?php echo $nombre?> <?php echo $apellido?></h3>
                    </li>
                </div>
                <hr>

                <!-- Estatus de Pagos Table -->
                <li>
                    <h3>Estatus de Pagos</h3>
                    <div style="margin-top: 3%; text-align: center; width: 100%">
                        <table style="width: 100%">
                            <tr>
                                <th>
                                    Estatus de Pagos
                                </th>
                                <th>
                                </th>
                            </tr>
                            <!-- Table Content Here -->
                        </table>
                    </div>
                </li>

                <hr>

             <!-- Pagos Pendientes Table -->
<li>
    <h3>Pagos Pendientes</h3>
    <div style="margin-top: 3%; text-align: center; width: 100%">
        <table style="width: 100%; text-align: left;">
            <tr>
                <th>Curso</th>
                <th>Pago Pendiente</th>
                <th></th>
            </tr>
            <?php foreach ($mostrar as $i): ?>
    <tr style="color: rgb(117,117,117)">
        <td><?php echo $i->nombre ?></td>
        <td>
            <form method="POST"> 
                <input class="input-text2" placeholder="Debe Tanto" style="color: black" name="debe" value="<?php echo $i->debe; ?>">
                <input type="hidden" value="<?php echo $i->curso_id ?>" name="curso_id">
                <input type="hidden" value="<?php echo $i->cliente_id ?>" name="cliente_id">
                <input type="hidden" value="<?php echo $i->id ?>" name="id">
                <td><button type="submit" class="btn-modificar-perfil" style="margin-top: 5%"  >Guardar</button></td>
            </form>
        </td>
    </tr>
<?php endforeach ?>

        </table>
    </div>
</li>
                <!-- Other list items here -->
            </ul>
            </div>

        <div style="width: 40%; text-align: right; background-image: url('build/imgs/chef3.jpg')">
            <button class="btn-cancelar" style="margin: 20px 15px 0 0" onclick="location.href='/perfil_cliente?id=<?php echo $i->cliente_id ?>'">Regresar</button>
        </div>
    </div>
    </div>

    <footer class="cont-footer-direc">
        <p>El Nivel - Materias Primas</p>
    </footer>
</body>
</html>
