<?php
/**
 * Created by PhpStorm.
 * User: shengchanggao
 * Date: 3/11/17
 * Time: 12:29
 */
    include("includes/includedFile.php");
?>
<div class="searchInputContainer">
    <div class="searchGuide">
        <p>Search for an Artist, Song, Album or Playlist</p>
    </div>
    <div>
        <input class="searchInput" type="text" placeholder="Start typing...">
    </div>
</div>

<script>

</script>
<div class="searchResultContainer">
    <div class="trackListContainer">
        <ul class="trackList">
            <?php
            $songIdArray = $album->getSongIds();
            $i = 1;
            foreach ($songIdArray as $songId) {
                $albumSong = new Song($con, $songId);
                $albumArtist = $albumSong->getArtist();

                echo "<li class='trackListRow'>
                           <div class = 'trackCount'>
                                <img class='play' src='assets/images/icons/playWhite.png' onclick='setTrack(\"".$albumSong->getId()."\",tempPlaylist,true)'>
                                <span class='trackNumber'>".$i."</span>
                            </div>
                            
                            <div class='trackInfo'>
                                <span class='trackTitle'>" . $albumSong->getTitle() . "</span>
                            </div>
                            <div class='trackOptions'>
                                <img class='optionsButton' src='assets/images/icons/option.png'>
                            </div>
                            
                            <div class='trackDuration'>
                                <span class='duration'>" . $albumSong->getDuration() . "</span>
                            </div>
                      </li>";
                $i = $i + 1;
            }
            ?>
            <script>
                var tempSongIds = '<?php echo json_encode($songIdArray)?>';
                tempPlaylist = JSON.parse(tempSongIds);
            </script>
        </ul>
    </div>

</div>