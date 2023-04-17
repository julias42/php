<?php
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';
require_once 'model/User.php';

session_start();

$taskHeader = 'Задачи';

$username = null;
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']->getUsername();
} else {
    header("Location: /");
    die();
}

$taskProvider = new TaskProvider();

if (isset($_GET['action']) && $_GET['action'] === 'add'){
  $textTask = $_POST['task'];
  $taskProvider->addTask(new Task($textTask));
  header("Location: /?controller=tasks");
  die();
}

if (isset($_GET['action']) && $_GET['action'] === 'done') {
  $key = $_GET['key'];
  $taskProvider->deleteTask($key);
  header("Location: /?controller=tasks");
  die();
}


$tasks = $taskProvider->getUndoneList();
include 'view/tasks.php';