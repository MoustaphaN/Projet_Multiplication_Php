<?php 


	
	$a=$_POST["table"];
	$b=$_POST["resultat"];
	$c=$_POST["resultat1"];
	


if (($a*$b)!=$c) {
	echo "<center><h2>Vous avez faussez la reponse:<br></h1> ".$a*$b." </h2></center>";

}
    else{

echo "<center><h2>Vous avez trouver la reponse:<br>".$c." </h2></center>";
}

 ?>