<HTML>
<HEAD>
<TITLE> Contoh tipe data array</TITLE>
</HEAD>
<BODY>
<?
//array01.php
$arr[]=1;
$arr[]=’10’;
$arr[]=”15”;
$arr[]=’A’;
$arr[]=”string”;
$buah[apel] = “merah”;
$buah[jeruk]=”kuning”;
$buah[mangga]=”hijau”;
for ($i=0;$i<5;$i++)
{
echo (“<br> variabel \$arr[$i] nilainya adalah : $arr[$i] ”);
}
Training PHP MySQL 13/85
echo (“<br> variabel \$buah[apel] nilainya adalah : $buah[apel] ”);
echo (“<br> variabel \$buah[jeruk] nilainya adalah : $buah[jeruk] ”);
echo (“<br> variabel \$buah[mangga] nilainya adalah : $buah[mangga] ”);
?>
</BODY>
</HTML>