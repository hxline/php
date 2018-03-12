<!DOCTYPE html>
	<html>
	<body>
<?php 
	session_start();
	$action = "?action=add";
	$button = "SAVE";
	$str = "";
	$int = "";
	if (isset($_GET['action']) && isset($_GET['id'])) {
		if ($_GET['action'] == 'update') {
			$str = $_SESSION['data'][$_GET['id']]['string'];
			$int = $_SESSION['data'][$_GET['id']]['int'];
			$action = "?action=update&id=".$_GET['id'];
			$button = "UPDATE";
		}
	}
?>
		<form action="action.php<?php echo $action; ?>" method="POST">
			<input type="text" value="<?php echo $str; ?>" name="string" placeholder="STRING" />
			<input type="text" value="<?php echo $int; ?>" name="int" placeholder="INTEGER" />
			<button type="submit"><?php echo $button;?></button>
		</form>
	</body>
	</html>