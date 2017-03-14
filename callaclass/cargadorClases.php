<?php
define('ROOTPATH', __DIR__);

function load_class($class_name)
{
    //ruta a nuetra clase externa
    $path = ROOTPATH     . '/lib/' . $class_name . '.php';
    if(file_exists($path))
    {
        require_once( $path ); 
    } 
}
load_class('claseExternaLlamada'); //metodo para cargar comprobamos s existe
// Podemos seguir cargando clases de forma sencilla

$obj = new claseExternaLlamada(); // Instancia de la clase, devuelve Hola!
$obj->saludar(); // instancia del método, devuelve Hola!

