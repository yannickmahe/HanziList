<?php

$db_host = 'localhost';
$db_name = 'hanzi';
$db_user = 'root';
$db_password = '';

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

$master_name = 'hanzi';

$csv_file = dirname(__FILE__).'/../'.$master_name.'.csv';

