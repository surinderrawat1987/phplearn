<?php

abstract class Box {
    public $length = 0;
    public $width = 0;
    public $height = 0;
    public $weight = 0;
    
    function __construct($l, $w, $h,$wt) {
        $this->length = $l;
        $this->width = $w;
        $this->height = $h;
        $this->weight = $wt;
    }

    function weight(){
        return $this->weight;
    }
    
    abstract function area();
    abstract function volume();

}
//
//Class Cube extends Container {
//
//    public $color;
//
//    function __construct($l, $w, $h, $c = 'transparent') {
//        parent::__construct($l, $w, $h);
//        $this->color = $c;
//    }
//    
//    function getColor(){
//        return $this->color;
//    }
//}
//
