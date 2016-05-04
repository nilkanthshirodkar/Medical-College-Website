<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_connect = "localhost";
$database_connect = "skhmc";
$username_connect = "root";
$password_connect = "saish";
$connect = mysql_pconnect($hostname_connect, $username_connect, $password_connect) or trigger_error(mysql_error(),E_USER_ERROR); 
?>