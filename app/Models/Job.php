<?php

require_once('app/Models/BaseElement.php');

class Job extends BaseElement{

    public function getDescription() {
        return $this->description;
    }

}