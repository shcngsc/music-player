<?php
/**
 * Created by PhpStorm.
 * User: shengchanggao
 * Date: 2/11/17
 * Time: 14:48
 */
 if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
     include("includes/config.php");
     include("includes/classes/Artist.php");
     include("includes/classes/Album.php");
     include("includes/classes/Song.php");
 }
 else {
     include("includes/header.php");
     include("includes/footer.php");
     $url = $_SERVER['REQUEST_URI'];
     echo "<script>openPage('$url')</script>";
     exit();
 }
?>