<?php
		function Konektatzea()
		{
			if (!($link=mysql_connect("localhost","root","")))
				{
				echo "Errorea datu-basearekin konektatzean.";
				exit();
				}
			if (!mysql_select_db("futbol_taldeak",$link))
				{
				echo "Errorea datu-basea hautatzean.";
				exit();
				}
			return $link;
		}
		$link=Konektatzea();
		echo "Datu-basearekin konektatzea lortu da.<br>";
		mysql_close($link); //konexioa ixten du
	?>
	