<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/publicar.css">
    <link rel="stylesheet" href="css/registrar.css">
    <script src="https://kit.fontawesome.com/29e135ceeb.js" crossorigin="anonymous"></script>
    <title>Publicar foto</title>
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
            <h1>Publicar foto</h1>
            <div class="subgrupo2">
                <label for="foto">Subir foto</label>
                <input class="input-file" type="file" name="foto" required>
            </div>
            <div class="subgrupo2">
                <label for="titulo">Título</label> 
                <input value="" type="text" name="titulo" minlength="5" class="form-control" required />
            </div>
            <div class="subgrupo2">
                <label for="categoria">Seleccione la categoria</label>
                <select class="form-select form-control" name="categoria" aria-label="Default select example">
                   <option value="">Casamiento</option>
                   <option value="">Casamiento</option>
                   <option value="">Casamiento</option>
                </select>
            </div>
            <div class="subgrupo2">
                <label for="fecha">Fecha</label> 
                <input value="" type="date" name="fecha" class="form-control" required />
             </div>
             <div class="subgrupo2">
                <label for="derechos">Tipo de derecho</label>
                <select class="form-select form-control" name="derechos" aria-label="Default select example">
                   <option value="">copyleft</option>
                   <option value="">copyleft</option>
                   <option value="">copyleft</option>
                </select>
            </div>
            <div class="subgrupo2">
                <label for="etiqueta1">Etiqueta 1</label> 
                <input value="" type="text" name="etiqueta1" minlength="5" class="form-control" required />
            </div>
            <div class="subgrupo2">
                <label for="etiqueta2">Etiqueta 2</label> 
                <input value="" type="text" name="etiqueta2" minlength="5" class="form-control" required />
            </div>
            <div class="subgrupo2">
                <label for="etiqueta3">Etiqueta 3</label> 
                <input value="" type="text" name="etiqueta3" minlength="5" class="form-control" required />
            </div>
            <div class="subgrupo2">
               <label for="derechos">Visibilidad</label>
               <select class="form-select form-control" name="derechos" aria-label="Default select example">
                  <option value="">Publica</option>
                  <option value="">P</option>
               </select>
           </div>
            <div class="subgrupo2">
               <input type="submit" value="Publicar" class="btn-guardar" />
            </div>
         </form>
         
      </section>
   </main>
</body>
<footer>
   <p class="text-center">Todos los derechos reservados - Desarrollado por Maximiliano Angel Gatica</p>
</footer>

</html>