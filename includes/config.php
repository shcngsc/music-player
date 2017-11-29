<?php
/**
 * Created by PhpStorm.
 * User: shengchanggao
 * Date: 20/10/17
 * Time: 10:38
 */

    ob_start();
    session_start();
    $timezone = date_default_timezone_set("Australia/Brisbane");

    $con = mysqli_connect("localhost", "root", "root","musicPlayer2");

    if (mysqli_connect_errno()) {
        echo "Failed to connect: " . mysqli_connect_errno();
    }

?>
