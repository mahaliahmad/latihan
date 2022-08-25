<?php 

//WEB CONFIG
$WEB_CONFIG = [
 'app_name' => 'CRUD PHP MYSQL', 
 'base_url' => 'http://localhost/tugascrud/'
];

//DATABASE CONFIG
$DB_CONFIG = [
 'host' => 'localhost',
 'user' => 'root',
 'passwd' => '',
 'db_name' => 'tugas_crud'
];  
//KONEK KE MYSQL
$connect = mysqli_connect($DB_CONFIG['host'], $DB_CONFIG['user'], $DB_CONFIG['passwd'], $DB_CONFIG['db_name']);

 ?>