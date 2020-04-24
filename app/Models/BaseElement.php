<?php

class BaseElement {
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