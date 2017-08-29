<?php

 
  function persianumber($str)
  {
    $farsi_chars = ['٠','١','٢','٣','٤','٥','٦','٧','٨','٩'];
    for ($i = 0; $i < strlen($str); $i++)
    {
	   if (is_numeric($str[$i]))
	   {
		    echo($farsi_chars[$str[$i]]);
	   } 
	   else
	   {
	   		echo($str[$i]);

	   }
	}
  }

?>
