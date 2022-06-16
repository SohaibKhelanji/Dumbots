<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all">
    <meta name="language" content="English">
    <meta name="description" content="Dumbots fight it out (if they're smart enough)">
    <meta name="keywords" content="Dumbots ">
    <meta name="copyright" content="Dumbots inc.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="imgs/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">


    <title>Dumbots</title>
</head>

<body>

<div id="mainMenuBanner-wrapper">
    <img src="imgs/logo.png" alt="Dumbots logo">
</div>

<div id="mainMenu-wrapper">
    <figure class="mainMenu">
        <img src="imgs/arena1.png" alt="Single player" />
        <figcaption>
            <h2>  <span> Single</span><br>Player</h2>
        </figcaption>
        <a href="singleplayer.php"></a>
    </figure>
    <figure class="mainMenu main">
        <img src="imgs/arena3.png" alt="Multi Player" />
        <figcaption>
            <h2>  <span> Multi</span><br>Player</h2>
        </figcaption>
        <a href="multiplayer.php"></a>
    </figure>
</div>

<br>
<br>
<br>

<div class="music-container" id="music-container">
    <div class="music-info">
        <h4 id="title"></h4>
        <div class="progress-container" id="progress-container">
            <div class="progress" id="progress"></div>
        </div>
    </div>

    <audio src="music/alien.mp3" id="audio"></audio>

    <div class="img-container">
        <img src="imgs/Alien.jpg" alt="music-cover" id="cover"/>
    </div>

    <div class="navigation">
        <button id="prev" class="action-btn">
            <i class="fas fa-backward"></i>
        </button>
        <button id="play" class="action-btn action-btn-big">
            <i class="fas fa-play"></i>
        </button>
        <button id="next" class="action-btn">
            <i class="fas fa-forward"></i>
        </button>
    </div>
</div>

<script src="js/script.js"></script>
</body>
</html>
