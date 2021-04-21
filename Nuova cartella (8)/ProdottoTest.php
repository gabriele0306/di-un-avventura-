<?php
	require_once("Prodotto.php");
	$Prodotto = new Prodotto(3,"Prodotto",43,179);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Prodotto Test</title>
</head>
<body>
      <?php
      echo $Prodotto->__toString();
      echo $Prodotto->getCodice();
      echo $Prodotto->getDescrizione();
      echo $Prodotto->getAliquota_IVA();
      echo $Prodotto->getPrezzo_Di_Vendita();

      $Prodotto->setCodice(4);
      $Prodotto->setDescrizione();
      $Prodotto->setAliquota_IVA(25);
      $Prodotto->setPrezzo_Di_Vendita(45);

      echo $Prodotto->__toString();
      echo $Prodotto->getCodice();
      echo $Prodotto->getDescrizione();
      echo $Prodotto->getAliquota_IVA();
      echo $Prodotto->getPrezzo_Di_Vendita();

       ?>
</body>
</html>	