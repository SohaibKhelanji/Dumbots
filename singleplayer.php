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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="imgs/icon.png">

    <title>Dumbots</title>
</head>
<body>
<div id="navigation">
    <a href="index.php"><i class="fa fa-arrow-left"></i> Go back</a>
</div>

<div class="gameModeTitle">
    <h1>Singleplayer</h1>
</div>

<div id="form-wrapper">
    <form action="singleplayerFight.php" method="post">
        <h2>Choose a name for your Dumbot</h2>
        <input id="name" name="name" type="text" placeholder="Your Dumbot's name" required maxlength="10">
        <br>
        <br>
        <h2>Select your Dumbot</h2>
        <input type="checkbox" class="characterSelectBox" name='character1' id="character1" value="character1"/><label for="character1"></label>
        <input type="checkbox" class="characterSelectBox"  name='character2' id="character2" value="character2"/><label for="character2"></label>
        <input type="checkbox" class="characterSelectBox"  name='character3' id="character3" value="character3"/><label for="character3"></label>
        <br>
        <br>
        <br>
        <input type="submit" name="submit" id="submit" value="Fight!">
    </form>
</div>

<script>
    var limit = 1;
    $('input.characterSelectBox').on('change', function(evt) {
        if($(this).siblings(':checked').length >= limit) {
            this.checked = false;
        }
    });

    $('.characterSelectBox').change(function () {
        $('#submit').prop("disabled", !this.checked);
    }).change()


</script>
</body>
</html>
