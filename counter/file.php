<?php
$f=@fopen("datoteka.txt","r");
if(!$f)
{
	echo "Datoteka ne postoji<br>";
	exit();
}
echo "Uspesna konekcija na datoteku<br>";
$sadrzaj=fread($f, filesize("datoteka.txt"));
$sadrzaj=str_replace("\r\n", "<br>", $sadrzaj);
echo $sadrzaj;
fclose($f);
echo "<hr>";
$f=@fopen("datoteka.txt","r");
$i=1;
while(!feof($f))
{
	$red=fgets($f);
	if(strstr($red, "bbosko")!==false)
		echo $i++." red: ".$red."<br>";
}
fclose($f);
echo "<hr>";

$f=@fopen("datoteka.txt","r");
$i=1;
$brojac=0;
while(!feof($f))
{
	$slovo=fgetc($f);
	if($slovo=="o" or $slovo=="O") $brojac++;
		//echo $i++." slovo: ".$slovo."<br>";
}
echo "Ima $brojac slova o<br>";
fclose($f);
echo "<hr>";

?>