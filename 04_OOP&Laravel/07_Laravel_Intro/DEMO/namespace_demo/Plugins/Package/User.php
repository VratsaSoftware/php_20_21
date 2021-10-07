<?php

namespace Plugins\Package;

use Plugins\Package\User as UserFromPackages;

class User
{

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {

        echo $this->name;
        return $this->name;
    }

    public function checUserStatus($id)
    {
        $user = new UserFromPackages('This is user fron Packages');
    }
}
