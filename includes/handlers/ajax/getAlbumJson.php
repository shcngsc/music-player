<?php
/**
 * Created by PhpStorm.
 * User: shengchanggao
 * Date: 24/10/17
 * Time: 22:09
 */
include("../../config.php");

if (isset($_POST['albumId'])) {
    $albumId = $_POST['albumId'];
}
$query = mysqli_query($con, "SELECT * FROM Albums WHERE id = '$albumId'");
$resultArray = mysqli_fetch_array($query);
echo json_encode($resultArray);

?>