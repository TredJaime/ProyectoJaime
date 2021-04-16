<?php

require 'app/Models/Job.php';
require 'app/Models/Project.php';
require_once 'app/Models/Printable.php';
require_once 'lib1/Project.php';

use App\Models\{Job, Project}; //tengo que llamar a mi job, ya que
//en job.php le aplique un namespace


$job1 = new Job('PHP Developer','This is an awesome job!!!');
$job1->months = 16;

$job2 = new Job('C# Developer','This is an awesome job!!!');
$job2->months = 24;

$job3 = new Job('Java Developer','This is an awesome job!!!');
$job3->months = 32;

$project1 = new Project('Project 1', 'Descripcion 1');
 
$projectLib = new Lib1\Project(); //de esta forma a la variable de mi libreria

$jobs = [
    $job1,
    $job2,
    $job3,
  ];
$projects = [
    $project1
];

 
  
  //lo que digo aca que lo todo se cumpla segun la interface printable
  function printElement(Printable $job){
    if($job->visible == false){
      return;
    }

    //en esta porcion de codigo puedo pedir que todo se cumpla segun
    //Printable.php
    echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
    echo '<p>' . $job->getDescripcion() . '</p>';
    echo '<p>' . $job->getDurationString() . '</p>';
    echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sapiente sed pariatur sint exercitationem eos expedita eveniet veniam ullam, quia neque facilis dicta voluptatibus. Eveniet doloremque ipsum itaque obcaecati nihil.</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo ' <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }