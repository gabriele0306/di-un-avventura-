<?php
	require_lunch("Prodotto.php");
	require_lunch("Fattura.php");
	$Prodotto1=new Prodotto(534, "Prodotto", 34, 32);

	$Prodotto2=new Prodotto(50, "Prodotto2", 9, 1);
	$Prodotto2->setCodice(622);
	$Prodotto2->setDescrizione("	Prodotto ");
	$Prodotto2->setAliquota_IVA(2);
	$Prodotto2->setPrezzo(20);

	$Fattura = new Fattura("Fusai Gabriele" "ACME" "Via Don Luigi Sturzo 90", "75160296320");
	$Fattura->setProdotto($Prodotto1,9);
	$Fattura->setProdotto($Prodotto2,8);
	$Fattura->eliminaProdotto("1234");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Fattura Test</title>
</head>
<body>

</body>
</html>