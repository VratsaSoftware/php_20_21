<?php

trait Validator
{

    public function minLength($string)
    {

        if (strlen($string) < 3) {
            echo "Min Length is 3";
            return false;
        }

        return true;
    }
}

class Mailer
{

    use Validator;

    public $message;

    public function __construct($message)
    {

        $this->message = $message;
    }

    public function sendMessage()
    {

        if (!$this->minLength($this->message)) {
            echo "Message Not Sent!";
            return false;
        }

        echo "Message Sent. Message Text $this->message";
    }
}

class SendNotification
{
    use Validator;

    public function sendMessage($msg)
    {
        if (!$this->minLength($msg)) {
            echo "Message is Too Short! Mailer not called!";
            return false;
        }

        $mailer = new Mailer($msg);

        $mailer->sendMessage();
    }
}


$notification = new SendNotification;
$notification->sendMessage('He');
