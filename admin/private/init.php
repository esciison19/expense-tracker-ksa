<?php
  ob_start(); // output buffering is turned on
  session_start(); // turn on sessions


  $admin = strpos($_SERVER['SCRIPT_NAME'], '/admin') + 7;
  $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $admin);


  require_once('database.php');
  require_once('db_query_function.php');
  require_once('auth_function.php');
  require_once('functions.php');
 
  $current = date("Y-m-d");
  $db = db_connection();