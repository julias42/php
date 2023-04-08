<?php

class Comment{

    private User $author;
    private Task $task;
    private string $text;

    function __construct(User $user, Task $task, string $text){
        $this->user = $user;
        $this->task = $task;
        $this->text = $text;
    }
    
    public function getUser(): User
    {
        return $this->author;
    }

    public function getTask(): Task
    {
        return $this->task;
    }

    public function getText(): string
    {
        return $this->text;
    }
}
    

