<?php 
session_start();

$user = $_SESSION["user"];
$barang = $_POST["barang"];
$pengiriman = $_POST["pengiriman"];
$alamat = $_POST["alamat"];
$tgl_beli = $_POST["tanggal"];
$harga = 0;
$harga_peng = 0;

for ($i=0;$i<count($barang);$i++) { 
    if ($barang[$i] == "coklat")
        $harga += 10000;
    else if ($barang[$i] == "susu") 
        $harga += 5000;
    else if ($barang[$i] == "gula")
        $harga += 7000;
    else if ($barang[$i] == "garam")
        $harga += 6000;
}

if($pengiriman == "jne")
    $harga_peng = 20000;
if($pengiriman == "tiki")
    $harga_peng = 18000;
if($pengiriman == "j&t")
    $harga_peng = 22000;

function total($x, $y) {
    return $x + $y;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tampilan</title>
</head>
<body>
    <table>
        <tr>
            <td>Tanggal Submit</td>
            <td>:</td>
            <td><?php echo $tgl_beli; ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $user["nama"]; ?></td>
        </tr>
        <tr>
            <td>No.Telp</td>
            <td>:</td>
            <td><?php echo $user["notelp"]; ?></td>
        </tr>
        <tr>
            <td>Barang yang dibeli</td>
            <td>:</td>
            <td>
                <?php
                foreach ($barang as $barang_b) {
                    echo $barang_b . "<br>";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Pengiriman</td>
            <td>:</td>
            <td><?php echo $pengiriman . " " . $harga_peng; ?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td>:</td>
            <td><?php echo total($harga, $harga_peng); ?></td>
        </tr>
    </table>
</body>
</html>
?>