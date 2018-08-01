<?php

include_once 'autoload.php';

class Cylinder extends Box{
    
    public $radius = 0;   
    
    function __construct($r,$h,$weight) {
        parent::__construct(0,0,0,$weight);
        $this->radius = $r;
        $this->height = $h;
    }
    
    function area(){
        return 3.14*$this->radius*$this->radius;
    }
    
    function volume(){
        return 3.14*$this->radius*$this->radius*$this->height;
    }
}
$cy = new Cylinder(10,15,500);
echo $cy->area();