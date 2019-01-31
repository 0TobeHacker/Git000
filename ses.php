<?php
session_start();
if($_SESSION("name") =="Name")
	echo "welcome bakc";

else
	echo "Who are you'";

?>