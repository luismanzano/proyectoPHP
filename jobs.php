<?php

require_once('app/Models/Job.php');
require_once('app/Models/Project.php');
require_once('app/Models/Printable.php');


$job1 = new Job('PHP Developer', 'This is an awesome Job');

$job1->setTitle('PHP Developer');
$job1->description = 'This is an awesome job';
$job1->visible = true;
$job1->months = 16;

$job2 = new Job('Javascript developer', 'Este trabajo es aun mejor que el anterior');


$job3 = new Job('Android Developer', 'Este trabajo es sumamente lucrativo');

$project1 = new Project('Project1', 'Description');

$jobs = [
    $job1,
    $job2,
    $job3
];

$projects = [
    $project1
];


function printElement(Printable $job) {
    echo '<li class = "work-position">';
    echo '<h5>' .  $job->getTitle() . '</h5>';
    echo '<p>' .  $job->getDescription() . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }

?>