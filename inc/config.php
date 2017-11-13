<?php
//Just configuration data
$config = array (
  'MAIL_HOST'=> 'smtp.live.com',
  'MAIL_USERNAME'=> 'tam_escalante@hotmail.com',
  'MAIL_PASSWORD'=> trim(file_get_contents(__DIR__.'/pswd.txt'))
);

require_once __DIR__.'/functions.php';

//Inclussion of composer
require_once __DIR__.'/../vendor/autoload.php';

//social links
?>
