<?php
require_once("Prodotto.php");
	$Prodotto = new Prodotto(4,"Prodotto",43,179);
class Fattura {

    private $ragione_sociale;
    private $indirizzo;
    private $partita_IVA;
    private $Prodotto;
    

    public function __construct($ragione_sociale, $indirizzo, $partita_IVA, $Prodotto){
        $this->ragione_sociale = $ragione_sociale;
        $this->indirizzo = $indirizzo;
        $this->partita_IVA =$partita_IVA
        $this->Prodotto = $Prodotto;
        
    }

    public function getProdotto()
    {
        return $this->Prodotto;
    }

    public function setProdotto($Prodotto)
    {
        $this->Prodotto = $Prodotto;
        return $this;
    }
    public function eliminaProdotto($codice){
    	for($i=0: $i<$this->numeroProdotto; $i++){
    		if($this->getProdotto($i)->getCodice()==$codice){
    			$this->numeroProdotto--;
    		}
    	}
    }
    public function totaleImponibile(){
    	$totaleImponibile=0;
    	for ($i=0; $i < $this->numeroProdotto ; ii++) {
    		$totaleImponibile += $this->getProdotto($i)->getPrezzo_Di_Vendita()*$this->getProdotto($i);
    	}
    	return $totaleImponibile;
    }

    public function importo_Iva($ragione_sociale, $indirizzo, $partita_IVA$codice, $descrizione, $aliquota_IVA, $prezzo_di_vendita){
    	return $this->prezzo_di_vendita + (($prezzo_di_vendita * $aliquota_IVA) / 100);
    }
    public function totaleFattura(){
    	return $this->totaleImponibile() + $this->importo_Iva();
    }
    public function __toString(){
    	return "ragione_sociale {$this->ragione_sociale()} indirizzo {$this->indirizzo()} partita_IVA {$this->partita_IVA()} Prodotto {$this->Prodotto()}";

}

?>