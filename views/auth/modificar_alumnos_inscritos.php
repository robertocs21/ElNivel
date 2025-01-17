
<body class="body-cursos">
<div class="cont-header-cursos">
<img src="build/imgs/logo1.png" class="float-left" onclick="location.href='/'">
    <h2 class="directorio-title"> <?php echo $nombre; ?> </h2>
</div>
<div class="cont-main-cursos">
    <ul class="ul-cursos">
        <li style="display: flex">
            <button type="submit" class="btn-regresar-cursos" onclick="location.href='/cursos'">Regresar</button>
            <button type="submit" class="btn-regresar-cursos">Guardar</button>
        </li>
        <li>
            <hr>
            <h2 style="color: white">Alumnos Inscritos en el Curso <?php echo $nombre; ?></h2>
        </li>
        <li>
            <div class="cont-curso-existente">
            <?php foreach ($mostrar as $m): ?>
               

                <form method="POST">
                    <table>
                        <th></th>
                        <td style="text-align: center">
                            <img src="build/imgs/user.png" class="fl-left-lg">
                        </td>
                        <td class="table-curso-data">
                            <ul class="ul">
                                <li>
                                    <h2><?php echo $m->nombre; ?> <?php echo $m->apellido; ?></h2>
                                    
                                </li>
                                <hr>
                                <li class="interlineado-s">
                                    <p> <?php echo $m->telefono; ?></p>
                                    <hr>
                                    <p> <?php echo $m->email; ?></p>
                                   
                                   <input type="hidden" name="cliente_id"  value="<?php echo $m->id ?>">
                                   <input type="hidden" name="curso_id"  value="<?php echo $id ?>">
                                </li>
                            </ul>
                        </td>
                        <td class="cont-btn-modificar-curso">
                        <button type="submit" name="modificar-curso" class="btn-modificar-curso">Eliminar de Curso</button>

                            <button type="button" name="modificar-curso" class="btn-modificar-curso" onclick="location.href='/estado_cuenta?id=<?php echo $m->id?>&nombre=<?php echo $m->nombre?>&apellido=<?php echo $m->apellido?>'">Estado de cuenta</button>
                        </td>
                    </table>
                </form>
                <?php endforeach; ?>
            </div>
        </li>
    </ul>

</div>
<footer class="cont-footer-direc">
    El Nivel - Materias Primas
</footer>
</body>
</html>