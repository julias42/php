<?php

class Task{
  private $User;
  private $description;
  private DateTime $dateCreated;
  private DateTime $dateUpdated;
  private DateTime $dateDone; 
  private int $priority;
  private bool $isDone = false;
  
  public function getDateDone()
  {
    return $this->dateDone;
  }

  public function getDateUpdated()
  { 
    
    return $this->dateUpdated;
  }

  public function setDescription()
  {
    $this->dateUpdated = new DateTime();
    
  }

  public function markAsDone()
  {   $format = 'd.m.Y H.i';
      $this->isDone = true;
      $this->dateUpdated = new DateTime();
      $this->dateDone = new DateTime();
      return [
        $this->dateUpdated->format($format),
        $this->dateDone->format($format),
        $this->isDone
      ];
  }
};

$task = new Task();
var_dump($task->markAsDone());