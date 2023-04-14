<?php

require_once 'model/UserProvider.php';

session_start();

if (isset($_GET['action']) && $_GET['action'] === 'logout'){
  unset($_SESSION['user']);
  header("Location: /");
  die();
}

$error = null; 
if (isset($_POST['username'], $_POST['password'])){
  ['username' => $username, 'password' => $password] = $_POST; 

  $userProvider = new UserProvider();
  $user = $userProvider->getByUsernameAndPassword($username, $password);

  if ($user === null)
  {
    $error = 'Пользователь с указанными учетными данными не найден';
  }else {
    $_SESSION['user'] = $user; 
    header('Location: /');
    die();
}
}

include 'view/signin.php';