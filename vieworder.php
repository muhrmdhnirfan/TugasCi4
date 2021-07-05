<!DOCTYPE html>
<html>
  <head>
    <title>Menampilkan Data</title>
  </head>
  <body style="width: 50%; margin: 0 auto; padding-top: 50px;">
	<h3>Menampilkan Relasi Data Orders dengan Shippers</h3>
	<hr>
		<table border="1">
			<tr>
				<th>Order ID</th>
				<th>Nama</th>
				<th>Tanggal Order</th>
				<th>Telpon</th>
				<th>Pengirim</th>
			</tr>
				<?php foreach($OrderID as $row):?>
			<tr>
				<td><?=$row['OrderID'];?></td>
				<td><?=$row['CustomerID'];?></td>
				<td><?=$row['OrderDate'];?></td>
				<td><?=$row['Phone'];?></td>
				<td><?=$row['CompanyName'];?></td>
			</tr>
				<?php endforeach;?>
		</table>
	</hr>
  </body>
</html>