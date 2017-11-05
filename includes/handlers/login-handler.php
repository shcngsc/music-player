<?php
/**
 * Created by PhpStorm.
 * User: shengchanggao
 * Date: 19/10/17
 * Time: 13:10
 */

if (isset($_POST['loginButton'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $account->login($username,$password);

    if ($result) {
        $_SESSION['userLoggedIn'] = $username;
        header("Location:index.php");
    }
}

