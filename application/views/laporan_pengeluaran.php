<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>ID</th>
		<th>Nomor pengeluaran</th>
		<th>Tanggal pengeluaran</th>
		<th>Tujuan Keluar</th>
		<th>User Input</th>
	</tr>

  <?php
  	$no=1;
  	foreach($pengeluaranwhs as $whs): ?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $whs->nomor_pengeluaran ?></td>
		<td><?php echo $whs->tanggal_pengeluaran ?></td>
		<td><?php echo $whs->tujuan_keluar ?></td>
		<td><?php echo $whs->user_input ?></td>		
	</tr>

<?php endforeach;  ?>

</table>

<script type="text/javascript">
	window.print();
</script>

</body>
</html>