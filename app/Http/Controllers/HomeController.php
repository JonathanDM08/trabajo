<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*La funcion de este controlador es que sea el que se encarge de una de las rutas del 
    routes/web.php  */

    //Definimos un metodo que se llamara index 

    public function __invok() //Como este controlador solo tiene una clase pues en el  Web.php no  habra la necesidad de escribirlo en el arreglo 
    {
        return view('home'); //Aparecera el mensaje de la pagina principal
    }
}
