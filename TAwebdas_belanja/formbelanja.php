<!DOCTYPE html>
<html>
<head>
	<title>Belanja</title>
</head>
<body>
<form action="prosesbelanja.php" method="post">
	<table>
		<tr>
			<td>Daftar Belanja</td>
			<td>:</td>
			<td>
				<input type="checkbox" name="barang[]" value="coklat">Coklat<br>
				<input type="checkbox" name="barang[]" value="susu">Susu<br>
				<input type="checkbox" name="barang[]" value="gula">Gula<br>
				<input type="checkbox" name="barang[]" value="garam">Garam<br>
			</td>
		</tr>
		<tr>
			<td>Jasa Pengiriman</td>
			<td>:</td>
			<td>
				<input type="radio" name="pengiriman" value="tiki">Tiki
				<input type="radio" name="pengiriman" value="jne">JNE
				<input type="radio" name="pengiriman" value="j&t">J&T
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<input type="hidden" name="tanggal" value="<?php echo date("Y/m/d"); ?>">
                <td colspan="3"><input type="submit" value="Beli"></td>
		</tr>
	</table>
</form>
</body>
</html>