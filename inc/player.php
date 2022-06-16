<?php

class player
{

    private $playerHp;
    private $opponentHp;


    public function __construct ($playerHp, $opponentHp){
        $this->playerHp = $playerHp;
        $this->opponentHp = $opponentHp;
    }



    public function playerAttack() {
        $damage = strval(rand(1, 20));
        $newOpponentHp = $this->getOpponentHp() - $damage;

        $this->setOpponentHp($newOpponentHp);
    }

    public function playerHeal() {
        $healHP = strval(rand(1,20));
        $newPlayerHp =  $this->getPlayerHp() + $healHP;

        $this->setPlayerHp($newPlayerHp);
    }

    public function opponentAttack() {
        $damage = strval(rand(1,20));
        $newPlayerHp = $this->getPlayerHp() - $damage;

        $this->setPlayerHp($newPlayerHp);
    }

    public function opponentHeal() {
        $healHP = strval(rand(1,20));
        $newOpponentHp =  $this->getOpponentHp() + $healHP;

        $this->setOpponentHp($newOpponentHp);
    }


    public function getPlayerHp()
    {
        return $this->playerHp;
    }

    public function getOpponentHp()
    {
        return $this->opponentHp;
    }

    public function setPlayerHp($playerHp)
    {
        $this->playerHp = $playerHp;
    }

    public function setOpponentHp($opponentHp)
    {
        $this->opponentHp = $opponentHp;
    }



}