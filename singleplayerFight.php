<?php
if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    if (isset($_POST['character1'])) {
        $character = $_POST['character1'];
    }
    elseif (isset($_POST['character2'])) {
        $character = $_POST['character2'];
    }
    else {
        $character = $_POST['character3'];
    }

    $background = rand(1, 3);
    $opponentCharacter =  rand(1, 3);
    $playerHp = rand(80, 200);
    $opponentHp = rand(80, 200);
}
else {
    header('location: singleplayer.php');
    exit();
}

?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Dumbots</title>

    <script>
       $(document).ready(function () {
           $("#startFight").click(function () {
               $("#fight-dialog").load("inc/singleplayerFightController.php", {
                   playerHp: <?php echo $playerHp?>,
                   opponentHp: <?php echo $opponentHp ?>,
                   playerName: "<?php echo $name ?>"
               });

           });
       });

       $(document).ready(function(){
           $("#startFight").click(function(){
               $("#fight-dialog").css("height", "180px");
               $("#skipFight-button").css("display", "inline-block");
               $(".player-hp").css("display", "none");

           });
       });

       function slide() {
           $( '#fight-dialog div:first' ).fadeTo(500, 1).delay(3500).fadeTo(500,0, function() {
               $(this).remove();
           });
       }

       setInterval(slide,1000);

       function skipFight() {
           $('#fight-dialog div').html('');
       }

       $(document).ready(function(){
           $("#skipFight-button").click(function(){
               $("#skipFight-button").css("display", "none");

           });
       });

    </script>
</head>
<body id="fight-body" style="background-image: url('imgs/arena<?php echo $background?>.png')">
<div id="navigation">
    <a href="index.php"><i class="fa fa-arrow-left"></i> Leave fight</a>
</div>

<div id="fight-area-wrapper">
    <div id="fight-player-box">
        <?php echo "
              <figure>
              <img src='imgs/$character.gif' alt='Player Dumbot'>
              <figcaption><p>$name</p>
              <p class='player-hp'>HP: $playerHp</p></figcaption>
              </figure>
            ";?>
    </div>
    <div id="fight-dialog-box">
        <div id="fight-dialog"></div>
        <button id='skipFight-button' style="display: none" onclick='skipFight()' >Skip to Result</button>
        <button id="startFight" onclick="style.display='none'">Start Fight</button>
    </div>
    <div id="fight-opponent-box">
        <?php echo "
              <figure>
              <img src='imgs/character$opponentCharacter.gif' alt='Opponent Dumbot'>
              <figcaption><p>Opponent</p></figure>
              <p class='player-hp'>HP: $opponentHp</p></figcaption>
              </figure>
            ";?>
    </div>
</div>


</body>
</html>

