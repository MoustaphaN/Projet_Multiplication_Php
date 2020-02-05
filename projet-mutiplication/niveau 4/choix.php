<?php 
	
	$a=$_POST["resultat"];
	$b=$_POST["resultat1"];
	$c=$_POST["resultat3"];
	$i=0;
	
if (($a*$b)!=$c) {
	echo "<center><h2 >Vous avez faussez la reponse:<br></h1><span style='color:red;'> ".$a*$b." </span></h2></center>";
}
    else{
    	$i++;
echo "<center><h2>Vous avez trouver la reponse:</h2><br><span style='color:green;'>".$c."</span> </center>";
}
$a1=$_POST["resultat4"];
	$b1=$_POST["resultat5"];
	$c1=$_POST["resultat6"];
	
if (($a1*$b1)!=$c1) {
	echo "<center><h2>Vous avez faussez la reponse:<br></h1><span style='color:red;'> ".$a1*$b1." </span></center>";
}
    else{
    	$i++;
echo "<center><h2>Vous avez trouver la reponse:<br></h2><span style='color:green;'>".$c1."</span> </center>";
}
$a2=$_POST["resultat7"];
	$b2=$_POST["resultat8"];
	$c2=$_POST["resultat9"];
	
if (($a2*$b2)!=$c2) {
	echo "<center><h2>Vous avez faussez la reponse:<br></h1> <span style='color:red;'>".$a2*$b2." </span> </h2></center>";
}
    else{
    	$i++;
echo "<center><h2>Vous avez trouver la reponse:<br></h2><span style='color:green;'>".$c2."</span> </center>";
}
$a3=$_POST["resultat10"];
	$b3=$_POST["resultat11"];
	$c3=$_POST["resultat12"];
	
if (($a3*$b3)!=$c3) {
	echo "<center><h2>Vous avez faussez la reponse:</h2><br><span style='color:red;'>".$a3*$b3." </span> </center>";
}
    else{
    	$i++;
echo "<center><h2>Vous avez trouver la reponse:</h2><br><span style='color:green'>".$c3."</span> </center>";
}
echo "<center><h2>Vous avez <br>".$i."/4 point(s) </h2></center>";
 ?>