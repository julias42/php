<?php   

require_once 'Comment.php';
require_once 'TaskService.php';
require_once 'User.php';
require_once 'Task.php';

$user = new User('Artyom', 29);
$task = new Task($user, 1, 'Задача номер один');
//$task->setComment(new Comment($user, $task, 'Сделать поскорее'));

TaskService::addComment($user, $task, 'Сделать поскорее');
TaskService::addComment($user, $task, 'Второй комментарий');

echo "Комментарии:". PHP_EOL;
foreach($task->getComment() as $comment){
    echo $comment->getText(). PHP_EOL;
    echo "Задача: " . $comment->getTask()->getDescription(). PHP_EOL;
}

