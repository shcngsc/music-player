<?php
/**
 * Created by PhpStorm.
 * User: shengchanggao
 * Date: 24/10/17
 * Time: 22:09
 */
include("../../config.php");

if (isset($_POST['artistId'])) {
    $artistId = $_POST['artistId'];
}
$query = mysqli_query($con, "SELECT * FROM Artists WHERE id = '$artistId'");
$resultArray = mysqli_fetch_array($query);
echo json_encode($resultArray);

?>