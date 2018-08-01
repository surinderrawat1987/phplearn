<?php

/**
 * Description of BasicSecurity
 *
 * @author Surinder Rawat
 */
class BasicSecurity {
    
    static function restrictMysqlInjection($instance,array &$array){
        foreach ($array as $key => $value) {
            $array[$key] = mysqli_real_escape_string($instance->getConnection(),$value);
        }
    }
}
