<?php
class Bootstrap {

    function __construct() {
$url = explode('/', rtrim($_GET['url'],'/'));
print_r($url);

$file = 'controllers/'. $url[0] . '.php';
if (file_exists($file))
{ require ($file);
$controllers = new $url[0];}
else
{
    require 'controllers/Error.php' ;
    $controllers =  new Error();
    throw new Exception("the file : $file does not exist");
    return FALSE;
}

if (isset($url[2])){
    $controllers->{$url[1]}($url[2]);
    
}
 else {
if (isset($url[1])){
    $controllers->{$url[1]}();
    
 }}
}}
/*
    }

}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
