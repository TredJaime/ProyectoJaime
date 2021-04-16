<?php

require_once 'BaseElement.php';


//declaro clase job la extiendo de su padre baseelement 
class Job extends BaseElement {
    public function __construct($title, $descripcion){ //pongo valores aca por que inicalizo los valores con esas varaibles
        $newTitle = 'Job: ' . $title; //esto lo que hace, llamo la varibale y la concadeno con job
        $this->title = $newTitle; //title se llama con los valores de newtile
      //  parent::__construct($newTitle, $descripcion); //parent heredo los contrucores del padre
    }



    public function getDurationString(){
        $years = floor($this->months / 12);
        //me trae el resto de la division con el %
        $extraMonths = $this->months % 12; 
      
        if($years == 0) {
          return "$extraMonths months";
        } else {
          return "Job duration: $years years, $extraMonths months";
        }
      
      }

      
}