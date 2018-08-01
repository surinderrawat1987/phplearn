<?php 
function __autoload($class_name) 
{
    try{
        @include_once 'Class/'.$class_name.".php";
        @include_once 'Class/Beans/'.$class_name.".php";
    } catch(Exception $e){
        
    }
    
}