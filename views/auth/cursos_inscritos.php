
<body class="body-cursos">
<div class="cont-header-cursos">
<img src="build/imgs/logo1.png" class="float-left" onclick="location.href='/'">
  <h2 class="directorio-title"> Cursos Inscritos </h2>
</div>
<div class="cont-main-cursos">
  <ul class="ul-cursos">
    <li style="display: flex">
      <button type="submit" class="btn-regresar-cursos">Regresar a Perfil</button>
      <button type="submit" name="modificar-curso" class="btn-regresar-cursos">Modificar</button>

    </li>
    <?php  foreach($cursos as $curso): ?>
    <hr>
    <li>
      <h2 style="color: white">Cursos de <?php echo $curso->nombre?></h2>
    </li>
    <li>
      <div class="cont-curso-existente">
        <form>
          <table>
            <th></th>
            <td style="text-align: center">
              <img src="build/imgs/bake.png" class="fl-left-lg">
            </td>
            <td class="table-curso-data">
              <ul class="ul">
                <li>
                  <h2>Repostería</h2>
                  <p class="interlineado-s"> Alejandra Castro </p>
                </li>
                <hr>
                <li class="interlineado-s">
                  <p> 12.03.2023</p>
                  <hr>
                  <p> 400.00 MXN</p>
                  <hr>
                  <p> Chantilly </p>
                </li>
              </ul>
            </td>
            <td class="cont-btn-modificar-curso interlineado-s">
              <h3>Estatus de Alumno</h3>
              <select class="select-estatus" name="estatus-inscripción">
                <option value="Inscrito">Inscrito</option>
                <option value="Pago-Pendiente">Pago Pendiente</option>
                <option value="Curso-Terminado">Curso Terminado</option>
              </select>
            </td>
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