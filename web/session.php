<?php
	session_start();
	if (isset($_POST['action'])) {
	    $_SESSION['data'] = unserialize($_POST['action']);
	}
?>