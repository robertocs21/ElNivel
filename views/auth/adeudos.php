<body class="body-cursos">
    <div class="cont-header-cursos">
        <img src="build/imgs/logo1.png" class="float-left">
        <h2 class="directorio-title"> Adedudos </h2>
    </div>
    <div class="cont-main-cursos">
        <div class="cont-btn-regresar-cursos">
            <button type="submit" class="btn-regresar-cursos" onclick="location.href='/'">Regresar a Directorio</button>
        </div>
        <ul class="ul-cursos">
            <?php foreach ($res as $r): ?>
            <li>
                <div class="cont-curso-existente">
                    <form>
                        <table>
                            <th></th>
                            <td style="text-align: center">
                                <img src="build/imgs/user.png" class="fl-left-lg">
                            </td>
                            <td class="table-curso-data">
                                <ul class="ul">
                                    <li>
                                        <h2><?php echo $r->nombre ?> <?php echo $r->apellido ?></h2>
                                     
                                    </li>
                                </ul>
                            </td>
                            <td class="cont-btn-modificar-curso">
                                <a type="submit" name="modificar-curso" class="btn-modificar-curso" onclick="location.href='/estado_cuenta?id=<?php echo $r->id?>&nombre=<?php echo $r->nombre?>&apellido=<?php echo $r->apellido?>'">Estado de Cuenta</a>
                            </td>
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
</body>
