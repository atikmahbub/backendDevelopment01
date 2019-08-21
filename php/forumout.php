<?php
	session_start();
	session_destroy();
	header("location: forumpage.php?page=1"); 

?>