<?php 

class User{
    private ?string $name;
    private ?int $age;
    private string $email;
    private string $sex;

    function __constructor(?string $name, ?int $age)
    {
        $this->name = $name;
        $this->age = $age;    
    }

    public function getName(): ?string
    {
        return $this->name;
    } 
    
    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setName(?string $name):void
    {   

        $this->name = $name;
    }

    public function setAge(?int $age):void
    {   
      
        $this->age = $age;
    }
   
}

