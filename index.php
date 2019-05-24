<?php
$c = mysqli_connect('localhost', 'root', '', 'ogloszenia'); 
$q = mysqli_query($c, "SELECT * FROM uzytkownik");
//touch("dane.txt");
$f = fopen('dane.txt', 'w');
while($tab=mysqli_fetch_array($q)){
	$text =  $tab['id']." ".$tab['nazwisko'].PHP_EOL;
	fwrite($f, $text);
}
fclose($f);
$fp = fopen("dane.txt", "r");
$tekst = fread($fp, 20);
echo $tekst;
echo "<br>";
$plik = implode('', file('dane.txt'));
echo $plik;
fclose($fp);
?>