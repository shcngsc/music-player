<?php
/**
 * Created by PhpStorm.
 * User: shengchanggao
 * Date: 15/11/17
 * Time: 00:15
 */
include("../../config.php");
if ( isset($_POST['playlistId']) && isset($_POST['songId']) ) {

    $playlistId = $_POST['playlistId'];
    $songId = $_POST['songId'];

    $orderQuery = mysqli_query($con, "SELECT MAX(playlistOrder)+1 AS playlistOrder FROM PlaylistSongs WHERE playlistId= '$playlistId'; ");

    $rows = mysqli_fetch_array($orderQuery);

    $playlistOrder=$rows[0]['playlistOrder'];
    if (!$playlistOrder) {
        $playlistOrder = 1;
    }
    $query = mysqli_query($con, "INSERT INTO PlaylistSongs VALUES('','$playlistId','$songId','$playlistOrder');");
}
else {
    echo "playlistId and songId is not passed in.";
}

?>