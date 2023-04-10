<?php
require_once 'dbh.inc.php';

session_start();
session_unset();
session_destroy();

header("location: ../webapp.php");
exit();