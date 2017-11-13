<?php
/**
 * Created by PhpStorm.
 * User: shengchanggao
 * Date: 12/11/17
 * Time: 21:49
 */
include("../../config.php");
if( isset($_POST['name']) && isset($_POST['username']) ) {

    $name = $_POST['name'];
    $username = $_POST['username'];
    $date = date("Y-m-d");
    $query = mysqli_query($con,"INSERT INTO PlayLists VALUES('','$username','$name','$date')");
} else {
    echo "name and user name is not passed in";
}
?>