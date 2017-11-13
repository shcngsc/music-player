<?php
/**
 * Created by PhpStorm.
 * User: shengchanggao
 * Date: 13/11/17
 * Time: 13:38
 */

class User {
    private $username;
    private $con;

    public function __construct($con,$userLoggedIn)
    {
        $this->username = $userLoggedIn;
        $this->con = $con;
    }

    public function getUsername() {
        return $this->username;
    }
}

?>