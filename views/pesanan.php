<html>
<head>
</head>
<body>
	<form action="" ></form>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Menu</th>
			<th>Harga</th>
			<th>Jumlah</th>

		</tr>
		<?php 
		$no = 1;
		foreach($value as $a){ 
		?>
		<form method='POST' action=''>
		<tr>
			<td><?php echo $a->id ?></td>
			<td><?php echo $a->namamenu ?></td>
			<td><?php echo $a->harga ?></td>
			<td><input type=number name=jumlah min=1 max=100 step=1></td>
		</td>
		</tr>
		<?php } ?>
		<form method='POST' action=''>
		<tr>
			<td colspan = 4>
				<input type=submit name=submit value=Pesan>
		</tr>
		</form>
	</table>
</body>
</html>