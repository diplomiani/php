<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require 'functions.php';
require 'database/connection.php';
require 'database/queryBuilder.php';
$config = require 'config.php';


return new QueryBuilder(
	Connection::make($config['database'])
);