<?php

$function='init';
$params=False;

if(array_key_exists("function_name",$_REQUEST))
{
    $function=$_REQUEST["function_name"];
    if(array_key_exists("params",$_REQUEST))
        $params=$_REQUEST["params"];
}

class SimpleWebPhp
{
    function __construct() {}

    function init() {
        echo "hello From PHP";
    }

    function getData($myparams) {
        echo "hello From PHP Function getData,<br>you sent these params<br>$myparams";
    }
}

$my_object=new SimpleWebPhp();
if($params)
    $my_object->$function($params);
else
    $my_object->$function();

?>
