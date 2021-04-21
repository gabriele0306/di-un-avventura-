<?php

class Prodotto {
	//attributi

    private $codice;
    private $descrizione;
    private $aliquota_IVA;
    private $prezzo_di_vendita

    // costruttore tipo prodotto

    public function __construct($codice, $descrizione, $aliquota_IVA, $prezzo_di_vendita){
        $this->codice = $codice;
        $this->descrizione = $descrizione;
        $this->aliquota_IVA = $aliquota_IVA;
        $this->prezzo_di_vendita = $prezzo_di_vendita;
    }

    public function getCodice()
    {
        return $this->codice;
    }

    public function setCodice($codice)
    {
        $this->codice = $codice;
        return $this;
    }

    public function getDescrizione()
    {
        return $this->descrizione;
    }

    public function setdescrizione($descrizione)
    {
        $this->descrizione = $descrizione;
        return $this;
    }
    public function getAliquota_IVA()
    {
        return $this->aliquota_IVA;
    }

    public function setAliquota_IVA($aliquota_IVA)
    {
        $this->aliquota_IVA = $aliquota_IVA;
        return $this;
    }
    public function getPrezzo_Di_Vendita()
    {
        return $this->prezzo_di_vendita;
    }

    public function setPrezzo_Di_Vendita($prezzo_di_vendita)
    {
        $this->prezzo_di_vendita = $prezzo_di_vendita;
        return $this;
    }

    public function __toString(){
    	return "codice {$this->getCodice()} descrizione {$this->getDescrizione()} aliquota_IVA {$this->getAliquota_IVA()} prezzo_di_vendita {$this->getPrezzo_Di_Vendita()}";
    }
}

?>
