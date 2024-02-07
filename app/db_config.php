<?php
namespace App;

$db_type = getenv('DB_TYPE');
$db_host = getenv('DB_HOST');
$db_name = getenv('DB_NAME');
$db_user = getenv('DB_USER');
$db_pass = getenv('DB_PASS');

$db_conn = $db_type.':host='.$db_host.';dbname='.$db_name;
