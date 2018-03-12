<?php
    session_start();
    if(isset($_GET['action'])) {
    	if (isset($_GET['id'])) {
    		if ($_GET['action'] == 'delete') {
	    		array_splice($_SESSION['data'], $_GET['id'], 1);
	    	} else if ($_GET['action'] == 'update') {
	    		$_SESSION['data'][$_GET['id']]['string'] = $_POST['string'];
	    		$_SESSION['data'][$_GET['id']]['int'] = $_POST['int'];
	    	}
    	} else if ($_GET['action'] == 'add') {
    		$id = sizeof($_SESSION['data']);
    		$_SESSION['data'][$id]['string'] = $_POST['string'];
    		$_SESSION['data'][$id]['int'] = $_POST['int'];
    	}
    }
    header("location: index2.php");
?>