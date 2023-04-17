<?php

class Task{
  private string $description;
  private bool $isDone = false;

  public function __construct(string $description)
  {
    $this->description = $description;
  }

  public function setDescrtiption(string $description)
  {
    $this->description = $description;
  }

  public function getDescription(): string
  {
    return $this->description;
  }

  public function getIsDone() :bool
  {
    return $this->isDone;
  }
  
  public function setIsDone(bool $isDone)
  {
    $this->isDone = $isDone;
  }

}