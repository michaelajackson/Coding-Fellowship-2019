<?php
date_default_timezone_set('America/Chicago');
include('config/config.php');
include('include/db_query.php'); //this should happen right after config so other functions have access to the database
include('include/header.php');
//include('include/blog.php');
include('include/writing_post.php');
include('include/issues.php');
include('include/comments.php');
include('include/email.php');