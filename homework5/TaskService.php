<?php

class TaskService{

    private User $author;
    private Task $task;
    private string $text;

public static function addComment(User $author, Task $task, string $text):void
{
    $task->setComment(new Comment($author, $task, $text));
}

}