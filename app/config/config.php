<?php 

$config = Config::singleton();

$config->set('url', 'localhost');
$config->set('dbhost', 'localhost/phpmyadmin');
$config->set('dbname', 'ecuador');
$config->set('dbuser', 'root');
$config->set('dbpass', '1');
$config->set('debug', TRUE);
$config->set('mailFrom',"algo@gmail.com");
$config->set('passMailFrom',"pass");

?>
