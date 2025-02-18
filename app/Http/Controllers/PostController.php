<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /*La funcion de este controlador es que sea el que se encarge de una de las rutas del 
    routes/web.php  */

    //Definimos un metodo que se llamara pindex

    public function index()
    { 
        return view('post.index');//Aqui se mostrara la vista  de la pagina de post
    }

    public function create()
    {
        return view('post.create');//Aqui se mostrara la vista de la pagina de crear post
    }

    public function show($post)//Aqui se mostrara la vista de la ruta de show
    {
        //Esta es una opcion 
        return view('post.show',[
            'post'=> $post
        ]);

        //Una segunda opcion seria
        /*return view('post.show',compact('post')); */

        /*Esto  es decision del  programador elegir cualquiera de las dos opciones  */
    }
}
