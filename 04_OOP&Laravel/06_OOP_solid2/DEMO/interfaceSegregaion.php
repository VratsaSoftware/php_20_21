<?php

interface iBird
{

    public function tweet();
    public function eat();
}

interface iFlying
{
    public function fly();
}

class Bird implements iBird
{

    public function tweet()
    {
        echo 'Tweet Tweet';
    }

    public function eat()
    {

        echo 'Eat something';
    }
}

class Nightingale extends Bird implements iFlying
{
    public function fly()
    {
        echo 'Fly Away';
    }
}

class Penguin extends Bird
{

    public function fly()
    {
    }
}

$newBird = new Nightingale;
$newBird->tweet();
$newBird->fly();

$newPenguin = new Penguin;
$newPenguin->eat();
