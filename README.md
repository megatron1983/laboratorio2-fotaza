# fotaza_php
Proyecto Fotaza Desarrollo Back End PHP 7.4

ENUNCIADO:

Se necesita implementar  una aplicación web que permita almacenar, ordenar, buscar, vender y compartir fotografías en línea.

La aplicación debe propiciar la generación de una comunidad de usuarios que puedan compartir fotografías creadas por ellos mismos. La comunidad se debe regir por normas de comportamiento y condiciones de uso que favorezcan la buena gestión de los contenidos.

Si bien las funcionabilidades de la aplicación no estarán limitadas, a continuación, se listan las principales funcionabilidades que deberá contener la aplicación.

Funcionabilidades (Requerimientos mínimos):


1. Sistema de autenticación de usuarios.

2. Gestor de contenidos (imágenes)

	1. Sistema de etiquetado de contenido

	2. Sistema de comentarios de contenido

3. Motor de búsqueda de contenidos.

La aplicación permite que los usuarios se registren y tengan un perfil que incluye los datos personales y sus intereses.

Los usuarios no autenticados solo podrán navegar y hacer uso del sistema de búsqueda de fotografías para acceder a las imágenes publicadas como “públicas”.

Los usuarios autenticados podrán publicar imágenes, las cuales podrán ser publicadas como públicas o protegidas. Las imágenes protegidas podrán solo ser accedidas por usuarios autenticados.

La publicación de una imagen deberá tener una imagen (Obligatoria), un título (Obligatorio), una categoría (Obligatoria), fecha de creación, formato, resolución, derechos de uso (Obligatorio) y etiquetas (Máximo 3 etiquetas).

La categoría debe ser una de las ya disponibles en el sitio (No debe implementarse la gestión de las categorías).

Los derechos de uso pueden ser (licencias copyleft, copyrigth, etc). Se deberá realizar un relevamiento sobre los distintos tipos de derechos de autor.

Las etiquetas son palabras claves que pueden agregarse a la publicación para favorecen la búsqueda de las imágenes.

Los usuarios autenticados podrán realizar comentarios sobre las publicaciones. Es necesario llevar registro sobre estos datos (fecha, usuario, descripción).

Cada publicación tendrá un sistema de valoración de 1 a 5 estrellas. Solo los usuarios autenticados podrán valorar publicaciones.

Las fotos que tengan más de 50 valoraciones en la primera semana de publicación cuyo valor promedio sea superior a 4 saldrán publicadas en la portada del sitio en un lugar destacado.

Las demás imágenes que figuren en la portada deberán seguir un criterio aleatorio que comprenda no más de una imagen del mismo usuario y cuyas imágenes no sean más de 1 año de antigüedad#   l a b o r a t o r i o 2 - f o t a z a  
 