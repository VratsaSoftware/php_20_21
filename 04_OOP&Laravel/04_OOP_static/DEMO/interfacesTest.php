<?php

interface iInfo
{

    public function getData($data);

    public function displayData();
}

interface iAuth
{
    public function twoFactorAuthLogin($user, $passwod, $pin);
}

interface iAuthGeoLocation extends iAuth
{
    public function checkGeoLocation($latitude, $longitude);
}

class User implements iInfo, iAuth
{

    public $username;
    protected $password;
    public $response;

    public function setUsername($username)
    {
        $this->username = $username;
        return true;
    }

    public function showUsername()
    {
        echo $this->username;
    }

    public function getData($data)
    {
        // Connect to DB
        $this->response = 'DB response for ' . $data;
        return $this->response;
    }

    public function displayData()
    {
        echo $this->response;
    }

    public function twoFactorAuthLogin($username, $password, $pin)
    {
        return true;
    }
}

class Admin implements iAuthGeoLocation
{

    public function twoFactorAuthLogin($user, $passwod, $pin)
    {
        return true;
    }

    public function checkGeoLocation($latitude, $longitude)
    {
        return true;
    }
}

$user1 = new User;

// $user1->setUsername('Ivan');
// $user1->showUsername();
// $user1->getData('id 1');
// $user1->displayData();

class Page implements iInfo
{

    public $dataResponse;

    public function getData($data)
    {

        if ($data != 'Page1') {
            $this->dataResponse = null;
            return false;
        }

        $this->dataResponse = 'DB response for page with id ' . $data;
        return true;
    }

    public function displayData()
    {
        if ($this->dataResponse) {
            echo "Page found! DB response is" . $this->dataResponse;
            return;
        }

        echo "Page Not Found!";
    }
}


$page1 = new Page;

// $page1->getData('Page1');
// $page1->displayData();

$page2 = new Page;
// $page2->getData('Page2');
// $page2->displayData();

if ($user1 instanceof iInfo && $user1 instanceof iAuth) {
    echo 'Instance';
} else {
    echo 'Not Instance';
}
