var currentPlaylist = [];
var shufflePlaylist = [];
var tempPlaylist = [];
var audioElement;
var mouseDown = false;
var currentIndex = 0;
var repeatSong = false;
var shuffle = false;
var userLoggedIn;

function Audio() {

    this.audio = document.createElement("audio");
    this.currentlyPlaying;

    this.setTrack = function(track) {
        this.audio.src = track.path;
        this.currentlyPlaying = track;

    };

    this.play =function () {
        this.audio.play();
    };

    this.pause = function () {
        this.audio.pause();
    };

    this.audio.addEventListener("timeupdate", function () {
        if (this.duration) {
            updateTimeProgressBar(this);
        }
        if (this.currentTime == this.duration) {
            nextSong();
        }
    });

    this.audio.addEventListener("canplay",function () {
        var duration = secondToMinute(this.duration);
        $(".progressTime.remain").text(duration);
        updateVolumeProgressBar(this);
    });

    this.audio.addEventListener("volumechange",function () {
        updateVolumeProgressBar(this);
    });
    this.setTime =function (seconds) {
        this.audio.currentTime = Math.floor(seconds);
    }
}

function secondToMinute (seconds) {
    var minutes = Math.floor(seconds / 60);
    var second = Math.ceil(seconds - (minutes * 60));
    if (seconds < 10) {
        return minutes.toString() + ":0" + second.toString();
    }
    else {
        return  minutes.toString() + ":" + second.toString();
    }
}

function updateTimeProgressBar(audio) {
    $(".progressTime.current").text(secondToMinute(audio.currentTime));
    $(".progressTime.remain").text(secondToMinute(audio.duration-audio.currentTime));
    var progressRatio = (audio.currentTime / audio.duration * 100);
    $(".playbackBar .progress").css("width", progressRatio+"%");
}
function updateVolumeProgressBar(audio) {
    var volumePercentage  = audio.volume * 100;
    $(".volumeBar .progress").css("width", volumePercentage+"%");
}

function openPage(url) {
    if (url.indexOf("?") == -1) {
        url = url + '?';
    }
    var encodedUrl = encodeURI(url + "&userLoggedIn=" + userLoggedIn);
    $("#mainContent").load(encodedUrl);
    $("body").scrollTop(0);
    history.pushState(null,null,url);
}

