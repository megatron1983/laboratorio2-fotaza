<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/styles.css">
   <script src="https://kit.fontawesome.com/29e135ceeb.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="css/perfil.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
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
            <li><a href="iniciarsesionView.html">Iniciar Sesión</a></li>
            <li><a class="boton-registrarse" href="registrarView.html">Registrarse</a></li>
         </ul>
      </nav>
   </header>
   <main class="margin-top">
      <section class="banner">
         <h1>¡Encuentra las fotografías perfectas para <br> tus proyectos en FOTAZA!</h1>
         <div class="centrar">
            <form action="">
               <input type="search" placeholder="Buscar...">
               <button type="submit">
                  <i class="fa-solid fa-magnifying-glass"></i>
               </button>

            </form>
         </div>

      </section>

      <section id="galeria">
         <article>
            <a href="#img1">
               <figure>
                  <img src="img/Galeria/casamiento/boyfriends-ge0c8cdc52_1280.jpg" alt="">
                  <figcaption>
                     Título
                  </figcaption>
               </figure>
            </a>
         </article>
         <article>
            <a href="#img2">
               <figure>
                  <img src="img/Galeria/cumplede15/dreaming-g492aa5d54_1280.jpg" alt="">
                  <figcaption>
                     Título
                  </figcaption>
               </figure>
            </a>
         </article>
         <article>
            <a href="#img3">
               <figure>
                  <img src="img/Galeria/deporte/swimmer-gf6a55d8b5_1280.jpg" alt="">
                  <figcaption>
                     Título
                  </figcaption>
               </figure>
            </a>
         </article>
         <article>
            <a href="#img4">
               <figure>
                  <img src="img/Galeria/paisaje/snow-g9d969bca1_1280.jpg" alt="">
                  <figcaption>
                     Título
                  </figcaption>
               </figure>
            </a>
         </article>
         <article>
            <a href="#img5">
               <figure>
                  <img src="img/Galeria/arte/girl-gcc03e2118_1280.jpg" alt="">
                  <figcaption>
                     Título
                  </figcaption>
               </figure>
            </a>
         </article>
         <article>
            <a href="#img6">
               <figure>
                  <img src="img/Galeria/deporte/tennis-g11abb25a1_1280.jpg" alt="">
                  <figcaption>
                     Título
                  </figcaption>
               </figure>
            </a>
         </article>
         <article>
            <a href="#img7">
               <figure>
                  <img src="img/Galeria/cumplede15/party-g4e4eb6ed8_1280.jpg" alt="">
                  <figcaption>
                     Título
                  </figcaption>
               </figure>
            </a>
         </article>
         <article>
            <a href="#img8">
               <figure>
                  <img src="img/Galeria/deporte/tennis-g11abb25a1_1280.jpg" alt="">
                  <figcaption>
                     Título
                  </figcaption>
               </figure>
            </a>
         </article>
         <article>
            <a href="#img9">
               <figure>
                  <img src="img/Galeria/gurmet/salmon-g856a8d060_1280.jpg" alt="">
                  <figcaption>
                     Título
                  </figcaption>
               </figure>
            </a>
         </article>
         <article>
            <a href="#img10">
               <figure>
                  <img src="img/Galeria/gurmet/vegetable-pan-g10b12f234_1280.jpg" alt="">
                  <figcaption>
                     Título
                  </figcaption>
               </figure>
            </a>
         </article>
         <ul>
            <li class="modal" id="img1">
               <a href="" class="cerrar">x</a>
               <div class="imagen">
                  <a href="#img10">&#60;</a>
                  <a href="#img2"><img src="img/Galeria/casamiento/boyfriends-ge0c8cdc52_1280.jpg" alt=""></a>
                  <a href="#img2">&#62;</a>
               </div>
               <h3>Titulo</h3>
               <div class="info">

                  <h4>Categoria</h4>
                  <p>Fecha de creación</p>
                  <p>Derecho de uso</p>
                  <h4 class="titulo-etiqueta">Etiquetas</h4>
                  <ul class="etiqueta">
                     <li>Etiqueta1</li>
                     <li>Etiqueta2</li>
                     <li>Etiqueta3</li>
                  </ul>
               </div>

            </li>

            <li class="modal" id="img2">
               <a href="" class="cerrar">x</a>
               <div class="imagen">
                  <a href="#img1">&#60;</a>
                  <a href="#img3"><img src="img/Galeria/cumplede15/dreaming-g492aa5d54_1280.jpg" alt=""></a>
                  <a href="#img3">&#62;</a>
               </div>
               <h3>Titulo</h3>
               <div class="info">

                  <h4>Categoria</h4>
                  <p>Fecha de creación</p>
                  <p>Derecho de uso</p>
                  <h4 class="titulo-etiqueta">Etiquetas</h4>
                  <ul class="etiqueta">
                     <li>Etiqueta1</li>
                     <li>Etiqueta2</li>
                     <li>Etiqueta3</li>
                  </ul>
               </div>

            </li>

            <li class="modal" id="img10">
               <a href="" class="cerrar">x</a>
               <div class="imagen">
                  <a href="#img9">&#60;</a>
                  <a href="#img1"><img src="" alt=""></a>
                  <a href="#img1">&#62;</a>
               </div>
               <h3>Titulo</h3>
               <div class="info">

                  <h4>Categoria</h4>
                  <p>Fecha de creación</p>
                  <p>Derecho de uso</p>
                  <h4 class="titulo-etiqueta">Etiquetas</h4>
                  <ul class="etiqueta">
                     <li>Etiqueta1</li>
                     <li>Etiqueta2</li>
                     <li>Etiqueta3</li>
                  </ul>
               </div>

            </li>
         </ul>
      </section>
   </main>
</body>
<footer>
   <p class="text-center">Todos los derechos reservados - Desarrollado por Maximiliano Angel Gatica</p>
</footer>

</html>