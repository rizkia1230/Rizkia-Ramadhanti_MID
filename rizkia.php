<?php
echo"<b>PENDAFTARAN PELANGGAN BARU</b> <br>";
?>

<?php
echo"<b>Data Pribadi</b><br>";
?>
<?php
if(isset($_POST['send']))
{
echo"Nama Lengkap 		: ".$_POST["namalengkap"]."<br>";
echo"Jenis Kelamin		: ".$_POST["LP"]."<br>";
echo"E-mail				: ".$_POST["e-mail"]."<br>";
}
?>

<?php
echo"<b>Data Alamat Pengiriman</b><br>";
?>
<?php
if(isset($_POST['send']))
{
echo"Nama Negara 		: ".$_POST["namanegara"]."<br>";
echo"Kota				: ".$_POST["kota"]."<br>";
echo"Alamat				: ".$_POST["alamat"]."<br>";
echo"Kode Post			: ".$_POST["kodepost"]."<br>";
}
?>

<?php
echo"<b>Data Alamat Pengiriman</b> <br>";
?>
<?php
if(isset($_POST['send']))
{
echo"Nomor Telepon 		: ".$_POST["notelepon"]."<br>";
echo"No Handphone		: ".$_POST["nohandphone"]."<br>";
echo"No Faksimili		: ".$_POST["nofaksimile"]."<br>";
}
?>

 <form action="Rizkia Ramadhanti_MID.php"Method="post">
   <td>
    <input type='submit' name='home' value='Home'>