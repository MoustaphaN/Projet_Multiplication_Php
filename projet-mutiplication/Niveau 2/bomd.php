<?php 
function tableMultiplication($nombre)
    {
        Echo 'Table de multiplication de '.$nombre."<br>";
 
        for ($i = 1; $i <= 10; $i++)
            echo $nombre.' x '.$i.' = '.$i*$nombre."<br>";
    }
//ici on utilise isset pour verifier si le name du chechbox existe
 
    	if (isset( $_POST["check_0"])) 
    	{

    	 tableMultiplication(0);
				    	 
		}
		if (isset( $_POST["check_1"])) 
    	{

    	 tableMultiplication(1);
				    	 
		}
		if (isset( $_POST["check_2"])) 
    	{

    	 tableMultiplication(2);
				    	 
		}
		if (isset( $_POST["check_3"])) 
    	{

    	 tableMultiplication(3);
				    	 
		}
		if (isset( $_POST["check_4"])) 
    	{

    	 tableMultiplication(4);
				    	 
		}
		if (isset( $_POST["check_6"])) 
    	{

    	 tableMultiplication(6);
				    	 
		}
		if (isset( $_POST["check_7"])) 
    	{

    	 tableMultiplication(7);
				    	 
		}
		if (isset( $_POST["check_8"])) 
    	{

    	 tableMultiplication(8);
				    	 
		}
		if (isset( $_POST["check_9"])) 
    	{

    	 tableMultiplication(9);
				    	 
		}

		










 ?>