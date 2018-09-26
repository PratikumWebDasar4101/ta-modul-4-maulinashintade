<?php
$foto = $_FILES['gambar']['name'];
if (isset($_POST['submit'])) {
	move_uploaded_file($_FILES['gambar']['tmp_name'], "upload/".$_FILES['gambar']['name']);
	echo "Foto Anda : ";
	echo "<br>";
	echo "<img src = 'upload/$foto' >";
}

$hobi = $_POST["hobi"];
echo "<br>";
echo "Hobi yang Anda Pilih :";
echo "<br>";
foreach ($hobi as $kesukaan) {
	echo "- $kesukaan";
	echo "<br>";
}
if (isset($_POST['hapus'])) {
	unset($hobi);
}
$film = $_POST["film"];
echo "<br>";
echo "Genre Film yang Anda Pilih : ";
echo "<br>";
foreach ($film as $genrekesukaan) {
	echo "- $genrekesukaan";
	echo "<br>";
}
if (isset($_POST['hapus'])) {
	unset($film);
}
$wisata = $_POST["wisata"];
echo "<br>";
echo "Tempat Wisata yang Anda Pilih : ";
echo "<br>";
foreach ($wisata as $travelling) {
	echo "- $travelling";
	echo "<br>";
}
if (isset($_POST['hapus'])) {
	unset($travelling);
}
?>
<form action="halamanakhir.php">
<input type="submit" name="hapus" value="Hapus">
</form>
