<?php
class apple{
    public $color;
    public $weight;
    public $size;
    
    public function __construct($color, $weight, $size){
        $this->color  = $color;
        $this->weight = $weight;
        $this->size   = $size;
    } 
    
    public function getColor(){
        return $this->color;
    }
    
    public function getWeight(){
        return $this->weight;
    }

    public function getSize(){
        return $this->size;
    }

    public function foo1(){}
}

?>
