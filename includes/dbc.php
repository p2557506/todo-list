<?
$baseURL = "/todo-list/";

$hostname = 'localhost'; // specify host domain or IP, i.e. 'localhost' or '127.0.0.1' or server IP 'xxx.xxxx.xxx.xxx'
$database = 'todo_list'; // specify database name
$db_user = 'root'; // specify username
$db_pass = ''; 

$connection = mysqli_connect("$hostname" , "$db_user" , "$db_pass", "$database");