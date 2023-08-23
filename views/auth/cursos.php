<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add your head content here -->
</head>

<body class="body-cursos">
    <div class="cont-header-cursos">
        <img src="build/imgs/logo1.png" class="float-left">
        <h2 class="directorio-title">Cursos</h2>
    </div>
    <div class="cont-main-cursos">
        <ul class="ul-cursos">
            <li>
                <button type="submit" class="btn-regresar-cursos" onclick="location.href='/'">Regresar a Directorio</button>
                <button type="submit" class="btn-regresar-cursos" onclick="location.href='/crearCurso'">Crear Nuevo Curso</button>
            </li>
            <?php foreach($res as $r):
                if ($r->eliminado == 1) {
                    continue; // skip this row if the course has been deleted
                }
            ?>
            <li>
                <div class="cont-curso-existente">
                    <form>
                        <table>
                            <tr style="border-bottom: 1px solid #ccc">
                                <td style="text-align: center">
                                    <img src="build/imgs/bake.png" class="fl-left-lg">
                                </td>
                                <td class="table-curso-data">
                                    <ul class="ul">
                                        <li>
                                            <h2><?php echo $r->nombre?></h2>
                                            <p class="interlineado-s"><?php echo $r->maestro?></p>
                                        </li>
                                        <hr>
                                        <li class="interlineado-s">
                                            <p>Para <?php echo $r->cupo?> alumnos</p>
                                            <hr>
                                            <p><?php echo $r->fecha?></p>
                                            <hr>
                                            <p><?php echo $r->hora?></p>
                                            <hr>
                                            <p><?php echo $r->precio?> MXN</p>
                                            <hr>
                                            <p><?php echo $r->marca?></p>
                                        </li>
                                    </ul>
                                </td>
                                <td class="cont-btn-modificar-curso">
                                    <ul class="ul">
                                        <li style="margin-top: 10%">
                                            <a type="submit" name="alumnos-inscritos" class="btn-modificar-curso" onclick="location.href='/modificar_alumnos_inscritos?id=<?php echo $r->id?>&nombre=<?php echo $r->nombre?>'">Alumnos Inscritos</a>
                                        </li>
                                        <li style="margin-top: 10%">
                                            <a type="submit" class="btn-modificar-curso" onclick="location.href='/modificar_curso?id=<?php echo $r->id?>'">Modificar</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </li>
            <?php endforeach?>
        </ul>
    </div>
    <footer class="cont-footer-direc">
        El Nivel - Materias Primas
    </footer>
</body>

</html>
