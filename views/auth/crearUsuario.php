
<body class="body-acceso">
<div class="cont-acceso">
  <form class="cont-inicioSesion" method="POST">
    <h1 class="h1-nivel-blanco"> Creación de Usuario </h1>
    <ul class="margin-top">
      <li class="cont-li-izquierda">
        <label for="nombreUsuario" class="label-input-acceso" name="nombre">Nombre</label>
      </li>
      <li class="cont-li-izquierda">
        <input class="input-acceso" type="text" name="nombre" id="nombreUsuario" required>
      </li>
      <li class="cont-li-izquierda">
        <label for="email" class="label-input-acceso">Usuario</label>
      </li>
      <li class="cont-li-izquierda">
        <input class="input-acceso" type="email" placeholder="Su Correo" name="email" id="email" required>
      </li>
      <li class="cont-li-izquierda">
        <label for="email" class="label-input-acceso">Contraseña</label>
      </li>
      <li class="cont-li-izquierda">
        <input class="input-acceso" type="password" name="password" id="contra" required>
      </li>
    </ul>
    <button class="btn-acceso" type="submit"> Guardar </button>
</form>
  <div class="cont-imgNivel">
    <img src="build/imgs/logo.png" class="logo">
</div>
</div>
<footer class="cont-footer" style="margin-top: 5%">
  <p class="nivel-azul">El Nivel - Materias Primas</p>
</footer>
</body>
</html>