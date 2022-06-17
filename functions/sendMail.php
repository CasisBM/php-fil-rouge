<?php 
function sendMail($toEmail,$fromEmail,$sujetEmail,$messageEmail){
    $header = 'From: '.$fromEmail.'\r\n'.'Reply-to'.$toEmail.'\r\n'.'X-Mailer: PHP/'.phpversion();
    mail($toEmail,$sujetEmail,$messageEmail,$header);
}