<?php

$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';



if(!@mysql_connect($mysql_host,$mysql_user,$mysql_password))
{
	die('cannot connect to database');
}
else
{
	if(@mysql_select_db('cinema_tbks'))
	{
		echo 'connection success';
	}
else
{
die('cannot connect to database');
}
}

?>