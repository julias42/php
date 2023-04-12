<?php

class User{
  
  private string $username;

  public function _construct(string $username){
    $this->username = $username;
  }

  public function getUsername():string
  {
    return $this->username;
  }
}