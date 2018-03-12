<?php 
	session_start();
	if (isset($_SESSION['data'])) {
?>
	<!DOCTYPE html>
	<html>
	<body>
		<a href="form.php"><button>ADD</button></a>
		<table border="3">
			<tr>
				<th width="70px">String</th>
				<th width="70px">Integer</th>
				<th width="120px">Action</th>
			</tr>
			<?php
				for ($i=0; $i < sizeof($_SESSION['data']); $i++) { 
			?>
			<tr>
				<td><?php echo $_SESSION['data'][$i]['string'] ?></td>
				<td><?php echo $_SESSION['data'][$i]['int'] ?></td>
				<td><a href="action.php?action=delete&id=<?php echo $i ?>">Delete</a> || <a href="form.php?action=update&id=<?php echo $i ?>">Update</a></td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
	</html>
<?php
		var_dump($_SESSION['data']);
	}
?>