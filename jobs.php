<?php

//todo lo que quiera ocupar se llama por use
use App\Models\{Job, Project}; //tengo que llamar a mi job, ya que
//en job.php le aplique un namespace

$jobs = Job::all(); //me trae todos los registros de la base de datos que encuentre
 

$project1 = new Project('Project 1', 'Descripcion 1');
$projects = [
    $project1
];

  //lo que digo aca que lo todo se cumpla segun la interface printable
  function printElement($job){
    /*
    if($job->visible == false){
      return;
    }
      */

    //en esta porcion de codigo puedo pedir que todo se cumpla segun
    //Printable.php
    echo '<li class="work-position">';
    echo '<h5>' .$job->title . '</h5>';
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