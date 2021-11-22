<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bezugskostenkalkulation</title>
  </head>
  <body>
  <h1>Bezugskalkulation</h1>
  
  <?php

	$menge = $_GET["menge"];
	$einzelpreis = $_GET["einzelpreis"];
	$skonto = $_GET["skonto"];
	$rabatt = $_GET["rabatt"];
	$fracht = $_GET["fracht"];
	$mehrwertsteuer = $_GET["mehrwertsteuer"];
	
	$listeneinkaufspreis;
	$lieferrabatt;
	$zieleinkaufspreis;
	$lieferskonto;
	$bareinkaufspreis;
	$bezugskosten;
	$bezugspreis;
	$steuer;
	$brutto;
	
	$listeneinkaufspreis = $einzelpreis * $menge;
	echo "Listeneinkaufspreis: " + $listeneinkaufspreis /n;
	
	if($rabatt=="zehn")
	{
		$lieferrabatt = ($listeneinkaufspreis * 10)/100;
		$zieleinkaufspreis = $listeneinkaufspreis - $lieferrabatt;
		echo "Zieleinkaufspreis: " + $zieleinkaufspreis /n;
	}
	else
	{
		$zieleinkaufspreis = $listeneinkaufspreis;
		echo "Zieleinkaufspreis: " + $zieleinkaufspreis /n;
	}
	
	switch($skonto)
	{
	case ("null")
	$bareinkaufspreis = zieleinkaufspreis;
	echo "Bareinkaufspreis: " + $bareinkaufspreis /n;
	break;
	
	case ("eins")
	$lieferskonto = $zieleinkaufspreis * 0,1
	$bareinkaufspreis = $zieleinkaufspreis - $lieferskonto;
	echo "Bareinkaufspreis: " + $bareinkaufspreis /n;
	break;
	
	case ("zwei")
	$lieferskonto = $zieleinkaufspreis * 0,2
	$bareinkaufspreis = $zieleinkaufspreis - $lieferskonto;
	echo "Bareinkaufspreis: " + $bareinkaufspreis /n;
	break;
	
	case ("drei")
	$lieferskonto = $zieleinkaufspreis * 0,3
	$bareinkaufspreis = $zieleinkaufspreis - $lieferskonto;
	echo "Bareinkaufspreis: " + $bareinkaufspreis /n;
	break;
	}
	
	$bezugspreis= $bareinkaufspreis + $bezugskosten;
	echo "Bezugspreis: " + $bezugspreis /n;
	
	if($mehrwertsteuer==0)
	{
		$brutto = $bezugspreis;
		echo "Brutto: " + $brutto  /n;
	}
	else
	{
		$steuer = ($bezugspreis * $mehrwertsteuer)/100;
		$brutto = $bezugspreis + $steuer;
		echo "Brutto: " + $brutto /n;
	}

	
?>
   
  </body>
</html>

