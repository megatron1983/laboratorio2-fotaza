<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="css/iniciarsesion.css">
   <script src="https://kit.fontawesome.com/29e135ceeb.js" crossorigin="anonymous"></script>
   <title>Fotaza</title>
</head>

<body>
   <!-- Menu de navegación -->
   <header>
      <nav class="menu">
         <a href="index.html">
            <img src="img/logo.jpeg" alt="">
         </a>
         <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="fotografosView.html">Fotografos</a></li>
            <li><a href="#">Categorias <i class="fa-solid fa-caret-down"></i></a>
               <ul>
                  <li><a href="cumplede15View.html">Cumpleaños de 15</a> </li>
                  <li><a href="casamientosView.html">Casamiento</a></li>
                  <li><a href="arteView.html">Arte</a></li>
                  <li><a href="gourmetView.html">Gourmet</a></li>
                  <li><a href="paisajesView.html">Paisajes</a></li>
                  <li><a href="deportesView.html">Deportes</a></li>
               </ul>
            </li>
            <li><a href="index.php?controller=usuario&action=login">Iniciar Sesión</a></li>
            <li><a class="boton-registrarse" href="registrarView.html">Registrarse</a></li>
         </ul>
      </nav>
   </header>
   <main>
      <section>
         <form action="index.php?controller=Usuario&action=autenticacion" method = "POST">
            <h1>Iniciar Sesión</h1>
            <div>
               <label for="email">Ingrese Correo</label>
               <input type="email" name="email" id="email">
            </div>
            <div>
               <label for="contrasena">Ingrese Contraseña</label>
               <input type="password" name="contrasena" id="contarsena">
            </div>
            <div>
               <button type="submit" name="">Iniciar Sesión</button>
            </div>
         </form>
      </section>
   </main>
</body>
<footer>
   <p class="text-center">Todos los derechos reservados - Desarrollado por Maximiliano Angel Gatica</p>
</footer>

</html>