# Tutorial Laravel

## Pasos
 - Instalar composer
 - iniciar proyecto , desde 0 (composer create-project laravel/laravel {nombre} "5.1.*") | Importar este proyecto si es alumno la rama de tuto
 - COlocar la rama tuto en el servidor apache
 - Teniendo colocado se debe de realizar la actualizacion de dependencias (composer update)
 - COnfigurar el entorno .env -> cambiar clave si es necesaraio generar una key
 - Ingresar a la bd con el nombre seleccionado y crearla en mysql
 - Crear las migraciones php artisan make:migration create_movies_table --create=movies
 - Genrar la migracion php artisan migrate
 - Generar modelo php artisan make:model Movie
 - Crear Controlador php artisan make:COntroller MovieCOntroller
 - MOdificar las rutas
 
 ### El servidor se pone a correr con el comando php artisan serve

 ## Rutas
    - traer todas -> http://localhost:8000/movies/
    - traer por id -> http://localhost:8000/movies/{id}
    - guardar -> http://localhost:8000/movies/ 
    - actualizar -> http://localhost:8000/movies/{id} = y enviar los campos por actulizar con el nombre como se muestra en el JSON INFERIOR
    - para eliminar -> http://localhost:8000/movies/ por post se debe de enviar el id por eliminar
    - para traer todas las peliculas con ese nombre -> http://localhost:8000/movies/find/{name}

### {"name":"Star Wars: Episode I - The Phantom Menace","duration":133,"genre":"Sci-Fi","earnings":1027044677,"description":""} se debe de enviar en metodo post
 

## Mas dudas hasta que me desocupe ya hize lo que tenia que hacer a te dejo unos inserts para que tengas valores para la movies

INSERT INTO movies VALUES (1,'Star Wars.',121,'Sci-Fi',775398007.00,'','2018-06-07 17:07:53','2018-06-07 18:30:04'),(2,'Star Wars: Episode I - The Phantom Menace',133,'Sci-Fi',1027044677.00,'','2018-06-07 17:10:15','2018-06-07 17:10:15'),(3,'Star Wars: Episode II - Attack of the Clones',132,'Sci-Fi',649398328.00,'','2018-06-07 17:12:19','2018-06-07 17:12:19'),(4,'Star Wars: Episode III - Revenge of the Sith',146,'Sci-Fi',848754768.00,'','2018-06-07 17:13:15','2018-06-07 17:13:15'),(5,'Star Wars: The Clone Wars',98,'Sci-Fi',68282844.00,'','2018-06-07 17:14:17','2018-06-07 17:14:17'),(6,'Star Wars: The Force Awakens',136,'Sci-Fi',2068223624.00,'','2018-06-07 17:15:21','2018-06-07 17:15:21'),(7,'Rogue One: A Star Wars Story',133,'Sci-Fi',1056057273.00,'','2018-06-07 17:16:17','2018-06-07 17:16:17'),(8,'Star Wars: The Last Jedi',151,'Sci-Fi',1332539889.00,'','2018-06-07 17:17:13','2018-06-07 17:17:13'),(9,'Solo: A Star Wars Story',135,'Sci-Fi',271339084.00,'','2018-06-07 17:18:08','2018-06-07 17:18:08');

## Atentamente
### RowerPulido | RowerDev | Jorge Pulido