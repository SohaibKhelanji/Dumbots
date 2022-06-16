<?php
include 'player.php';

$playerHp = $_POST['playerHp'];
$opponentHp = $_POST['opponentHp'];
$playerName = $_POST['playerName'];


$player = new player($playerHp, $opponentHp);

$currentPlayerHp =  $player->getPlayerHp();
$currentOpponentHp = $player->getOpponentHp();



echo "Fight Transcript";
echo "<br>";
echo "<br>";


while (!$currentOpponentHp < 1 && !$currentPlayerHp < 1) {


        if(!$currentOpponentHp < 1) {

            $choice = rand(1, 10);
            if ($choice > 3) {
                $player->opponentAttack();
                echo "<div>";
                echo "<p style='color: darkred;text-align: right;margin-right: 10px'>Opponent hit $playerName</p>";
                echo "<br>";
                $newPlayerHp = $player->getPlayerHp();
                $currentPlayerHp = max($newPlayerHp, 0);
                echo "<p>$playerName has $currentPlayerHp HP left</p>";
                echo "<br>";
                echo " <p style='float: right;margin-right: 10px; display: inline; color: darkred'>Opponent: $currentPlayerHp HP</p>
                       <p style='float: left;margin-left: 10px; display: inline'>$playerName: $currentOpponentHp HP</p>";
                echo "</div>";
            }else {
                $player->opponentHeal();
                echo "<div>";
                echo "<p style='color: darkred;text-align: right;margin-right: 10px'>Opponent healed</p>";
                echo "<br>";
                $newOpponentHp = $player->getOpponentHp();
                $currentOpponentHp = $newOpponentHp;
                echo "<p style='color: darkred;'>Opponent now has $currentOpponentHp HP</p>";
                echo "<br>";
                echo " <p style='float: right;margin-right: 10px; display: inline; color: darkred'>Opponent: $currentOpponentHp HP</p>
                       <p style='float: left;margin-left: 10px; display: inline'>$playerName: $currentPlayerHp HP</p>";
                echo "</div>";
            }
        }

         if (!$currentPlayerHp < 1) {
             $choice = rand(1, 10);
             if ($choice > 3) {
                 $player->playerAttack();
                 echo "<div>";
                 echo "<p style='text-align: Left;margin-left: 10px'>$playerName hit opponent</p>";
                 echo "<br>";
                 $newOpponentHp = $player->getOpponentHp();
                 $currentOpponentHp = max($newOpponentHp, 0);
                 echo "<p style='color: darkred'>Opponent has $currentOpponentHp HP left</p>";
                 echo "<br>";
                 echo " <p style='float: right;margin-right: 10px; display: inline; color: darkred'>Opponent: $currentOpponentHp HP</p>
                    <p style='float: left;margin-left: 10px; display: inline'>$playerName: $currentPlayerHp HP</p>";
                 echo "</div>";
             }
             else {
                 $player->playerHeal();
                 echo "<div>";
                 echo "<p style='text-align: left;margin-left: 10px'>$playerName healed</p>";
                 echo "<br>";
                 $newPlayerHp = $player->getPlayerHp();
                 $currentPlayerHp = $newPlayerHp;
                 echo "<p>$playerName now has $currentPlayerHp HP</p>";
                 echo "<br>";
                 echo " <p style='float: right;margin-right: 10px; display: inline; color: darkred'>Opponent: $currentOpponentHp HP</p>
                       <p style='float: left;margin-left: 10px; display: inline'>$playerName: $currentPlayerHp HP</p>";
                 echo "</div>";
             }
         }

}


if ($currentPlayerHp <= 0) {
    echo "<h1 style='color: darkred'>Game Over!<br> Opponent has defeated $playerName</h1>";
}
else{
    echo "<h1 style='color: Gold'>Victory!<br> $playerName has defeated his opponent</h1>";
}
