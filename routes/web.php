<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; //Aqui se importa el controlador que se creo en la carpeta App\Http\Controllers\HomeController.php
use App\Http\Controllers\PostController; //Aqui se importa el controlador que se creo en la carpeta App\Http\Controllers\PostController.php

//El primero sera el principal 
Route::get('/', [HomeController::class, '__invok']); /*Aqui se esta llamando al controlador que se creo en la carpeta App\Http\Controllers\HomeController.php */


//Los otros son los secundarios de otras rutas 
Route::get('/post', [PostController::class, 'index']); //Aqui se esta llamando al primer controlador que se creo en la carpeta App\Http\Controllers\PostController.php

Route::get('/post/create',[PostController::class, 'create']); //Aqui se esta llamando al segundo controlador de PostController.php

Route::get('/post/{post}',[PostController::class,'show']); //Aqui se esta llamando el tercer controlador de PostController.php



/*Route::get('/post/{post}/{category}',function($post,$category){      <-El $post nos servira para abrir todos los articulos que queramos crear  
    return "Aqui mostrara el post {$post} de la categoria {$category}";     <-ruta numero 3
}); */

//Tipos de peticiones 

/*GET:Son aquellas peticiones que nosotros hacemos cuando escribimos una URL en el navegador,
cuando damos  clip sobre  un enlace y  nos redirige hacia alguna hacia alguna pagina web.*/

/*POST:Son aquellas peticiones que nosotros podemos hacer desde unn formulario, cuando queremos
mandar informacion y no queremos que esa informacion sea visible.*/

/*PUT o  PATCH: Se  utiliza cuando queremos actualizar algunn registro */

//DELETE:Se utiliza cuando queremos eliminar un registro*/