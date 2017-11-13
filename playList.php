<?php
include("includes/includedFile.php");
if (isset($_GET['id'])) {
    $playlistId = $_GET[id];
}
else {
    header("Location:index.php");
}
$playlist = new Playlist($con,$playlistId);
$playlistName = $playlist->getName();
$playlistOwner = $playlist->getOwner();
?>

<div class="entityInfo" style="border-bottom:1px solid #282828">
    <div class="leftSection">
        <img src="assets/images/icons/playlist.png" alt="playlistCover">
    </div>
    <div class="rightSection">
        <h2><?php echo $playlistName; ?></h2>
        <span> by <?php echo $playlistOwner;?></span>
        <p><?php echo $playlist->getNumOfSongs() ?> songs</p>
        <button class="blackButton" onclick="deletePlaylist(<?php echo $playlistId ?>)"> Delete The Playlist</button>

    </div>
</div>

<div class="trackListContainer">
    <ul class="trackList">
        <?php
        $songIdArray = $playlist->getSongIds();
        $i = 1;
        foreach ($songIdArray as $songId) {
            $playlistSong = new Song($con, $songId);
            $songArtist = $playlistSong->getArtist()->getName();
            echo "<li class='trackListRow'>
                           <div class = 'trackCount'>
                                <img class='play' src='assets/images/icons/playWhite.png' onclick='setTrack(" .$songId. ",tempPlaylist,true)'>
                                <span class='trackNumber'>".$i."</span>
                            </div>
                            
                            <div class='trackInfo'>
                                <span class='trackTitle'>" . $playlistSong->getTitle() . "</span>
                                <div class='trackArtist'>" . $songArtist . "</div>
                            </div>
                            <div class='trackOptions'>
                                <img class='optionsButton' src='assets/images/icons/option.png'>
                            </div>
                            
                            <div class='trackDuration'>
                                <span class='duration'>" . $playlistSong->getDuration() . "</span>
                            </div>
                      </li>";
            $i = $i + 1;
        }
        ?>
        <script>
            var tempSongIds = '<?php echo json_encode($songIdArray)?>';
            tempPlaylist = JSON.parse(tempSongIds);
            console.log(tempPlaylist);
        </script>

    </ul>

</div>


