<?php
echo "Hi! This is a basic bot for Telegram!";
$botToken=" ";
$website="https://api.telegram.org/bot".$botToken;

$update=file_get_contents("php://input");
$update=json_decode($update, TRUE);
$chatId=$update["message"]["chat"]["id"];
$name=$update["message"]["chat"]["first_name"];
$text=$update["message"]["text"];

$comm="hello";
$pic1="AgADBAADAaoxGy2nUwIUGUDEfEP0SFWOWBkABK2w9idsZnomc-sBAAEC";
$picArray1= array('AgADBAADxqgxGy2nUwKCO5PDKlqWg3y0aTAABAIsoJ2zYZyuSTkBAAEC', 'AgADBAADvagxGy2nUwLpJs2QITS6p5KWaTAABKT-5UdBFooLGAcBAAEC', 'AgADBAADx6gxGy2nUwLBlTt60VAgcgqfaTAABBB4-Bxmb4BRejsBAAEC', 'AgADBAADyKgxGy2nUwI9ahWJeHFdtRqNcjAABEqsHtIteuuG_QEBAAEC', 'AgADBAADyagxGy2nUwKPTtsE0lMdkfNnaTAABGOVr4igxqzQRqgBAAEC','AgADBAADyqgxGy2nUwIwtzVdpzBGjVtKcTAABIEZFaMmFFqThQEBAAEC','AgADBAADy6gxGy2nUwID770w6Za04ploaTAABGaPfCPcZDpPzKsBAAEC');
$k=array_rand($picArray1);
$randomPic=$picArray1[$k];

if(strpos($text,'yourRegExp1')!==false)
  {file_get_contents($website."/sendphoto?chat_id=".$chatId."&photo=".$pic1);}
if(strpos($testo,'yourRegExp2')!==false)
  {file_get_contents($website."/sendphoto?chat_id=".$chatId."&photo=".$pic1);}

