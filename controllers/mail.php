<?php
require_once('../models/mail.php');
require_once("../vendors/sendgrid-php/sendgrid-php.php");
date_default_timezone_set('America/Bahia');
$sendgrid = new SendGrid('', '');

if(isset($_POST)&&$_POST['email']!=""&&$_POST['title']!=""&&$_POST["message"]!=""){
    if($_POST['name']==""){
        $_POST['name']='Anônimo';
    }
    $nemail = new Email($_POST);
    $nemail->Send($sendgrid);
}
header('Location:../');
?>
