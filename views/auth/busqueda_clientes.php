<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add your head content here -->
</head>

<body class="body-cursos">
    <div class="cont-header-cursos">
    <img src="build/imgs/logo1.png" class="float-left" onclick="location.href='/'">
        <h2 class="directorio-title">Resultados de Búsqueda</h2>
    </div>
    <div class="cont-main-cursos">
        <ul class="ul-cursos">
            <li style="display: flex">
                <button type="button" class="btn-regresar-cursos" onclick="location.href='/buscar'">Regresar</button>
            </li>
            <li>
                <hr>
            </li>
            <?php foreach($resultado as $r): ?>
            <li>
                <div>
                    <form>
                        <table class="cont-curso-existente">
                            <tr style="border-bottom: 1px solid #ccc">
                                <td style="text-align: center">
                                    <img src="build/imgs/user.png" class="fl-left-lg">
                                </td>
                                <td class="table-curso-data">
                                    <ul class="ul">
                                        <li>
                                            <h2 class="interlineado-s"><?php echo $r->nombre?> <?php echo $r->apellido?></h2>
                                        </li>
                                        <hr>
                                        <li class="interlineado-s">
                                            <p><?php echo $r->telefono?></p>
                                            <hr>
                                            <p><?php echo $r->email?></p>
                                         
                                            <hr style="border: none; border-top: 1px solid transparent;">
                                        </li>
                                    </ul>
                                </td>
                                <td class="cont-btn-modificar-curso">
                                    <button type="button" name="modificar-curso" class="btn-modificar-curso" onclick="location.href='/perfil_cliente?id=<?php echo $r->id?>'">Ver Perfil</button>
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
