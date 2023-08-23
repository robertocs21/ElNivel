
<body class="body-cursos">
    <div class="cont-header-cursos">
        <img src="build/imgs/logo1.png" class="float-left">
        <h2 class="directorio-title">Cursos</h2>
    </div>
    <div class="cont-main-cursos">
        <ul class="ul-cursos">
            <?php foreach($id as $i): ?>
            <li>
                <button type="button" class="btn-regresar-cursos" onclick="location.href='/perfil_cliente?id=<?php echo $i->id ?>'">Regresar</button>
                <hr>
                <h1 style="color: white">Cursos Disponibles</h1>
            </li>
            <li>
                <div class="cont-curso-existente">
                    <table>
                        <?php 
                    
                        foreach($res as $r):
                          
                              
                        ?>

                        <tr style="border-bottom: 1px solid #ccc">
                            <td style="text-align: center">
                                <img src="build/imgs/bake.png" class="fl-left-lg">
                            </td>
                            <td class="table-curso-data">
                                <ul class="ul">
                                    <li>
                                        <h2><?php echo $r->nombre?></h2>
                                        <p class="interlineado-s"> <?php echo $r->maestro?> </p>
                                    </li>
                                    <hr>
                                    <li class="interlineado-s">
                                        <p> Para <?php echo $r->cupo?> alumnos</p>
                                        <hr>  
                                        <p> <?php echo $r->fecha?></p>
                                        <hr>
                                        <p> <?php echo $r->precio?> MXN</p>
                                        <hr>
                                        <p> <?php echo $r->marca?> </p>
                                    </li>
                                </ul>
                            </td>
                            <td class="cont-btn-modificar-curso">
                                <ul class="ul">
                                    <li style="margin-top: 10%">
                                        <form method="POST">
                                            <input type="hidden" name="curso_id" value="<?php echo $r->id?>" />
                                            <input type="hidden" name="cliente_id" value="<?php echo $i->id?>" />
                                            <input type="submit"  class="btn-modificar-curso" value="Inscribir">
                                        </form>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <?php 
                            // endif;
                        endforeach;
                        ?>
                    </table>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <footer class="cont-footer-direc">
        El Nivel - Materias Primas
    </footer>
</body>

</html>
