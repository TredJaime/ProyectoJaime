<?php

require_once 'BaseElement.php';

class Job extends BaseElement{
    public function __construct($title, $descripcion){
        $newTitle = 'Job: ' . $title;
        $this->title = $newTitle;
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