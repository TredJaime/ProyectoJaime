<?php

//creamos una clase
class Job {
    private $title;
    public $descripcion;
    public $visible;
    public $months;

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }
}

$job1 = new Job();
$job1->setTitle('PHP Developer');
$job1->descripcion = 'This is an awesome job!!!';
$job1->visible = true;
$job1->months = 16;

$job2 = new Job();
$job2->setTitle('PHP Developer');
$job2->descripcion = 'This is an awesome job!!!';
$job2->visible = true;
$job2->months = 24;
 
$jobs = [
    $job1,
    $job2
    /** 
    [
    'title' => 'Python Developer',
    'visible' => false,
    'months' => 14
    ],
    [
    'title' => 'Developer',
    'visible' => true,
    'months' => 5
    ],
    [
    'title' => 'Node Developer',
    'visible' => true,
    'months' => 24
    ],
    [
    'title' => ' Frontend Developer',
    'visible' => true,
    'months' => 3
    ]
    */
  ];

  function getDuration($months){
    $years = floor($months / 12);
    //me trae el resto de la division con el %
    $extraMonths = $months % 12; 
  
    if($years == 0) {
      return "$extraMonths months";
    } else {
      return "$years years, $extraMonths months";
    }
  
  }
  
  
  function printJob($job){
    if($job->visible == false){
      return;
    }
    echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
    echo '<p>' . $job->descripcion . '</p>';
    echo '<p>' . getDuration($job->months) . '</p>';
    echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sapiente sed pariatur sint exercitationem eos expedita eveniet veniam ullam, quia neque facilis dicta voluptatibus. Eveniet doloremque ipsum itaque obcaecati nihil.</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo ' <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }