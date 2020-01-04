<?php
session_start();

$_SESSION ['hewan'] = "Sapi";

echo "Session ID : ".session_id(). "<br/><br/>";
echo "Session barunya adalah = $_SESSION[hewan]";
?>