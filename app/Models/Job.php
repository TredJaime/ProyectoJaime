<?php
namespace App\Models;
//agrego este use que viene del orm eloquen
use Illuminate\Database\Eloquent\Model;



//declaro clase job la extiendo de Model orm eloquen 
class Job extends Model {
  protected $table = 'jobs'; //esta es la tabla que creamos en nuestra bd
  


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