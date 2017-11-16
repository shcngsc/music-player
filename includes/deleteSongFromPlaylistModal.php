<?php
/**
 * Created by PhpStorm.
 * User: shengchanggao
 * Date: 15/11/17
 * Time: 10:19
 */

    $deleteSongModal = "<div class=\"optionsMenu\">
                            <p class='modalItem' onclick='deleteSongFromPlaylist(this)' data-playlist='$playlistId'>Delete From Playlist</p>
                            <p class='modalItem' onclick='goToAlbum()'>Go to Album</p>
                        </div>";

    echo $deleteSongModal;
?>