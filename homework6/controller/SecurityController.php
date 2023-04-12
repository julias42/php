<?php

require_once 'model/UserProvider.php';
require_once 'model/User.php';


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
    header("Location: /");
    die;
  }
}

if (isset($_GET['action']) && $_GET['action'] === 'logout'){
  unset($_SESSION['username']); 
  header("Location: /");
  die;

}
require_once 'view/signin.php';