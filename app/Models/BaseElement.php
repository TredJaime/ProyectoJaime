<?php
namespace App\Models;

//clase padre
//creamos una clase, ponemos el implents aca por que es la clase padre
class BaseElement implements Printable {
    protected $title;
    public $descripcion;
    public $visible = true;
    public $months;

    public function __construct($title, $descripcion){
        $this->setTitle($title);
        $this->descripcion = $descripcion;
    }

    //get a set para poder ocupar los private
    public function setTitle($t){
        if($t == ''){
            $this->title = 'N/A';
        }else{
             $this->title = $t;
        }
    }

    public function getTitle(){
        return $this->title;
    }

    public function getDurationString(){
        $years = floor($this->months / 12);
        //me trae el resto de la division con el %
        $extraMonths = $this->months % 12; 
      
        if($years == 0) {
          return "$extraMonths months";
        } else {
          return "$years years, $extraMonths months";
        }
      
      }

      public function getDescripcion(){
        return $this->descripcion;
      }
}