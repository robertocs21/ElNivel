

<body>
    <form class="body-cursos" method="POST">
        <div class="cont-header-cursos">
        <img src="build/imgs/logo1.png" class="float-left" onclick="location.href='/'">
            <h2 class="directorio-title">Cursos Inscritos</h2>
        </div>
        <div class="cont-main-cursos">
            <ul class="ul-cursos">
                <li style="display: flex">
                    <button type="button" class="btn-regresar-cursos" onclick="location.href='/perfil_cliente?id=<?php echo $id ?>'">Regresar</button>
                    <button type="button" class="btn-regresar-cursos" onclick="location.href='/seleccionar_cursos?folio=<?php echo $folio?>'">Registrar en curso</button>
                </li>
                <hr>
                <li>
                    <h2 style="color: white">Cursos de <?php echo $nombre?> <?php echo $apellido?></h2>
                </li>
                <?php foreach ($mostrar as $consu): ?>
    <li>
        <div class="cont-curso-existente">
            <form method="POST"> <!-- Agregamos un formulario para cada curso -->
                <table>
                    <tr>
                        <td style="text-align: center">
                            <img src="build/imgs/bake.png" class="fl-left-lg">
                        </td>
                        <td class="table-curso-data">
                            <ul class="ul">
                                <li>
                                    <h2><?php echo $consu->nombre ?></h2>
                                    <p class="interlineado-s"><?php echo $consu->maestro ?></p>
                                </li>
                                <hr>
                                <li class="interlineado-s">
                                    <p><?php echo $consu->fecha ?></p>
                                    <hr>
                                    <p><?php echo $consu->precio ?> MXN</p>
                                    <hr>
                                    <p><?php echo $consu->marca ?></p>
                                    <input type="hidden" value="<?php echo $consu->id ?>" name="id"> <!-- Cambiamos el atributo name -->
                                </li>
                            </ul>
                        </td>
                        <td class="cont-btn-modificar-curso interlineado-s">
                            <button type="submit" name="eliminar-curso" class="btn-modificar-curso">Eliminar Curso</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </li>
<?php endforeach ?>
            </ul>
        </div>
        <footer class="cont-footer-direc">
            El Nivel - Materias Primas
        </footer>
    </form>
</body>

</html>
