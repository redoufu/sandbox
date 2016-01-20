<?php
class Bananer{
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

}

?>
