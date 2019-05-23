<?php
date_default_timezone_set('America/Chicago');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('config/config.php');
include('include/db_query.php'); //this should happen right after config so other functions have access to the database
