<?php
Class Email {

    public $name;
    public $email;
    public $title;
    public $message;

    public function __construct($argv){
        $this->name = $argv['name'];
        $this->email = $argv['email'];
        $this->title = $argv['title'];
        $this->message = $argv['message'];
    }
    public function Send($sendgrid){
        $email = new SendGrid\Email();
        $email->addTo("contato@semcomp.com.br")
              ->setFrom($this->email)
              ->setFromName($this->name)
              ->setSubject($this->title)
              ->setText($this->message);
        if($sendgrid->send($email)){
            return true;
        }else{
            return false;
        }
    }
}
?>
