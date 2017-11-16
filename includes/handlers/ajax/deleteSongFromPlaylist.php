<?php
/**
 * Created by PhpStorm.
 * User: shengchanggao
 * Date: 15/11/17
 * Time: 10:39
 */

include("../../config.php");
if ( isset($_POST['playlistId']) && isset($_POST['songId']) ) {

    $playlistId = $_POST['playlistId'];
    $songId = $_POST['songId'];

    $query = mysqli_query($con, "DELETE FROM PlaylistSongs WHERE songId = '$songId' AND playlistId = '$playlistId';");
}
else {
    echo "playlistId and songId is not passed in.";
}

?>