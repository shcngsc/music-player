<?php
/**
 * Created by PhpStorm.
 * User: shengchanggao
 * Date: 24/10/17
 * Time: 22:09
 */
include("../../config.php");

if (isset($_POST['songId'])) {
    $songId = $_POST['songId'];
    $query = mysqli_query($con, "UPDATE Songs SET plays = plays + 1 WHERE id = '$songId'");
}
?>