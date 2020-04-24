<?php

class Job {
    private $title;
    public $description;
    public $visible = true;
    public $months;

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($t){
        return $this->title = $t;
    }

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }
    
}

$job1 = new Job('PHP Developer', 'This is an awesome Job');

$job1->setTitle('PHP Developer');
$job1->description = 'This is an awesome job';
$job1->visible = true;
$job1->months = 16;

$job2 = new Job('Javascript developer', 'Este trabajo es aun mejor que el anterior');


$job3 = new Job('Android Developer', 'Este trabajo es sumamente lucrativo');

$jobs = [
    $job1,
    $job2,
    $job3
];


function printJob($job) {
    echo '<li class = "work-position">';
    echo '<h5>' .  $job->getTitle() . '</h5>';
    echo '<p>' .  $job->description . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }

?>