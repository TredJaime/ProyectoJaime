<?php

require 'app/Models/Job.php';
require 'app/Models/Project.php';

$job1 = new Job('PHP Developer','This is an awesome job!!!');
$job1->months = 16;

$job2 = new Job('C# Developer','This is an awesome job!!!');
$job2->months = 24;

$job3 = new Job('Java Developer','This is an awesome job!!!');
$job3->months = 32;

$project1 = new Project('Project 1', 'Descripcion 1');
 
$jobs = [
    $job1,
    $job2,
    $job3,
  ];
$projects = [
    $project1
];

 
  
  
  function printElement($job){
    if($job->visible == false){
      return;
    }
    echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
    echo '<p>' . $job->descripcion . '</p>';
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