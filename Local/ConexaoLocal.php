<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if(!$link){
die('nao pode ser conectado'. mysql_error());
}
echo 'Conexão com sucesso!';
mysql_close($link);
?>