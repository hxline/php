<?php 
	session_start();
	if (isset($_SESSION['data'])) {
		var_dump($_SESSION['data']);
?>
	<!DOCTYPE html>
	<html>
	<body>
		<table border="3">
			<tr>
				<th width="70px">Nama</th>
				<th width="70px">Kelas</th>
			</tr>
			<?php
				foreach ($_SESSION['data'] as $dt) {
			?>
			<tr>
				<td><?php echo $dt['nama'] ?></td>
				<td><?php echo $dt['kelas'] ?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
	</html>
<?php
	}
?>