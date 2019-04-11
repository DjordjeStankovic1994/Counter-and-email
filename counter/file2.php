<?php
$f=@fopen("datoteka.txt","r");
$sadrzaj=fread($f, filesize("datoteka.txt"));
echo $sadrzaj;
echo "<br>";
fclose($f);
$f=@fopen("datoteka.txt","w");
$sadrzaj2=$sadrzaj+1;
fwrite($f, $sadrzaj2);
//$sadrzaj=str_replace($sadrzaj,$sadrzaj2, $sadrzaj);
echo "<br>";
fclose($f);
echo $sadrzaj2;


?>