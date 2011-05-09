<?php

$mysql_db_host = 'localhost';
$mysql_db_name = 'hanzi';
$mysql_db_user = 'root';
$mysql_db_password = '';

$mysqli = new mysqli($mysql_db_host, $mysql_db_user, $mysql_db_password, $mysql_db_name);

$master_name = 'hanzi';

$csv_file = dirname(__FILE__).'/../'.$master_name.'.csv';

