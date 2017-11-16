<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Free CSS template by ChocoTemplates.com</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
</head>
<body>
	<!-- Header -->
	<div id="header">
		<div class="shell">
			<!-- Logo -->
			<h1 id="logo" class="notext"><a href="#">Sport Zone Sport Portal</a></h1>
			<!-- End Logo -->
		</div>
	</div>
	<!-- End Header -->
	
	<!-- Navigation -->
	<div id="navigation">
		<div class="shell">
			<div class="cl">&nbsp;</div>
			<ul>
				<li><a href="./index.html">Hasiera</a></li>
			    <li><a href="./kontsulta.php">kontsultatu</a></li>
			    <li><a href="./txertatu.php">erregistroak gehitu</a></li>
			    <li><a href="./ezabatu.php">erregistroal ezabatu</a></li>
			</ul>
			<div class="cl">&nbsp;</div>
		</div>
	</div>
	<!-- End Navigation -->
	
	<!-- Heading -->
	<div id="heading">
		<div class="shell">
			<div id="heading-cnt">
				
				<!-- Sub nav -->
				<div id="side-nav">
					<ul>
					    <li class="active"><div class="link"><a href="./kontsulta.php">kontsultatu</a></div></li>
					    <li><div class="link"><a href="./txertatu.php">erregistroak gehitu</a></div></li>
					    <li><div class="link"><a href="./ezabatu.php">erregistroak ezabatu</a></div></li> 
					</ul>
				</div>
				<!-- End Sub nav -->
				
				<!-- Widget -->
				<div id="heading-box">
					<div id="heading-box-cnt">
						<div class="cl">&nbsp;</div>
						
						<!-- Main Slide Item -->
						<div class="featured-main">
							<a href="#"><img src="css/images/featured-main.jpg" alt="" /></a>
							<div class="featured-main-details">
								<div class="featured-main-details-cnt">									
									<h4><a href="#">Alemania</a></h4>
									<p>Bayern-Borussia sera la final de la liga de campeones</p>
								</div>
							</div>
						</div>
						<!-- End Main Slide Item -->
						
						<div class="featured-side">
							<?php
								include("conectatu.php");
								$link=Konektatzea();
								$result=mysql_query("select * from direktiba",$link);
							?>
							<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
							<TR><TD>&nbsp;Presi_DNI</TD><TD>&nbsp;Presi_Izena&nbsp;</TD><TD>&nbsp;Admin_Kopurua&nbsp;</TD><TD>&nbsp;Talde_Izena&nbsp;</TD><TD>&nbsp;Ezabatu&nbsp;</TD></TR>
							<?php
								while($row = mysql_fetch_array($result))
								{
								printf("<tr>
											
											<td>&nbsp;%s</td>
											<td>&nbsp;%s&nbsp;</td>
											<td>&nbsp;%s&nbsp;</td>
											<td>&nbsp;%s&nbsp;</td>
											<td><a href=\"borrar.php?Presi_DNI='%s'\">Ezabatu</a></td>
											
										</tr>", $row["Presi_DNI"],$row["Presi_Izena"],$row["Admin_kopurua"],$row["Talde_Izena"],$row["Presi_DNI"]);
								}
								mysql_free_result($result);
								mysql_close($link);
							?>
							</table>
							
						</div>
						<div class="cl">&nbsp;</div>						
					</div>
				</div>
				<!-- End Widget -->
				
			</div>			
		</div>
	</div>
	<!-- End Heading -->
	
	
	<!-- End Main -->
	
	<!-- Footer -->
	<div id="footer">
		<div class="shell">
			<div class="cl">&nbsp;</div>
			<a href="#" class="left">TERMS OF USE</a>
			<a href="#" class="left">PRIVACY POLICY</a>
			<p class="right">&copy; Sitename.com. Design by <a href="http://chocotemplates.com">ChocoTemplates.com</a> | downloaded from <a href="http://www.mytemplatez.com">Free Templates</a></p>
			<div class="cl">&nbsp;</div>
		</div>
	</div>
	<!-- End Footer -->
</body>
</html>