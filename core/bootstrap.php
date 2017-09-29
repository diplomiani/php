<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require 'core/functions.php';
require 'core/Router.php';
require 'core/Request.php';
require 'core/database/connection.php';
require 'core/database/queryBuilder.php';
$app = [];
$app['config'] = require 'config.php';


$app['database'] = new QueryBuilder(
	Connection::make($app['config']['database'])
);