<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="css/registrar.css">
   <link rel="stylesheet" href="css/publicar.css">
   <script src="https://kit.fontawesome.com/29e135ceeb.js" crossorigin="anonymous"></script>
   <title>Editar perfil</title>
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
            <li><a class="publicar-foto" href="publicarView.html">Publicar foto</a></li>
            <li><a class="foto-perfil" href="#"><img src="/Fotaza-Final-main/img/Captura.PNG" alt=""><i class="fa-solid fa-caret-down"></i></a>
            <ul>
               <li><a href="editarPerfilView.html">Editar perfil</a> </li>
               <li><a href="#">Cerrar sesión</a></li>
            </ul>
         </li>
      </ul>
      </nav>
   </header>
   <main>
      <section>
         <form action="" method="post" class="registrar">
            <h1>Editar perfil</h1>
            <div class="grupo">
               <div class="subgrupo">
                  <label for="nombre">Nombre:</label>
                  <input type="text" name="nombre" minlength="5" class="form-control" required />
               </div>
               <div class="subgrupo">
                  <label for="apellido">Apellido:</label>
                  <input type="text" name="apellido" minlength="5" class="form-control" />
               </div>
            </div>
            <div class="subgrupo2">
                  <label for="foto">Foto de Perfil</label>
                  <input class="input-file" type="file" name="foto">
            </div>
            <div class="subgrupo2 check">
               <h4 class="subtitulo-form">Elige tus intereses</h4>
               <label for="cumple15"><input id="cumple15"  type="checkbox" name="categoria[]">Cumpleaños de 15</label>
               <label for="casamiento"><input id="casamiento" type="checkbox" name="categoria[]">Casamiento</label>
               <label for="gourmet"><input id="gourmet" type="checkbox" name="categoria[]">Gourmet</label>
               <label for="paisaje"><input id="paisaje" type="checkbox" name="categoria[]">Paisaje</label>
               <label for="deporte"><input id="deporte" type="checkbox" name="categoria[]">Deporte</label>
               <label for="arte"><input id="arte" type="checkbox" name="categoria[]">Arte</label>
            </div>
            <div class="subgrupo2">
               <label for="email">Email:</label>
               <input value="" type="text" name="email" minlength="5" class="form-control" required />
            </div>
            <div class="subgrupo2">
               <input type="submit" value="Guardar cambios" class="btn-guardar" />
            </div>
         </form>
      </section>
   </main>
</body>
<footer>
   <p class="text-center">Todos los derechos reservados - Desarrollado por Maximiliano Angel Gatica</p>
</footer>

</html>