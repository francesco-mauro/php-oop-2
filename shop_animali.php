<?php

class Categoria {
    private $nome;
    private $icona;

    public function __construct($nome, $icona){
        $this->setNome($nome);
        $this->setIcona($icona);
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of icona
     */ 
    public function getIcona()
    {
        return $this->icona;
    }

    /**
     * Set the value of icona
     *
     * @return  self
     */ 
    public function setIcona($icona)
    {
        $this->icona = $icona;

        return $this;
    }
}

class Prodotto {
    private $titolo;
    private $prezzo;
    private $categoria;

    public function __construct($titolo, $prezzo, Categoria $categoria){
        $this->setTitolo($titolo);
        $this->setPrezzo($prezzo);
        $this->setCategoria($categoria);

    }



    /**
     * Get the value of titolo
     */ 
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * Set the value of titolo
     *
     * @return  self
     */ 
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;

        return $this;
    }

    /**
     * Get the value of prezzo
     */ 
    public function getPrezzo()
    {
        return $this->prezzo;
    }

    /**
     * Set the value of prezzo
     *
     * @return  self
     */ 
    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;

        return $this;
    }

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria(Categoria $categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function getDettagli() {
        return [
            'Titolo' => $this->getTitolo(),
            'Prezzo' => $this->getPrezzo(),
            'Categoria' => $this->getCategoria()->getNome(),
            'IconaCategoria' => $this->getCategoria()->getIcona()
        ];
    }

}

// ----------------------------------Test della classe Prodotto---------------------------

$categoriaCani = new Categoria("Cani", "🐶");
$prodotto1 = new Prodotto("Cibo per cani", 22.1, $categoriaCani);
$dettagliProdotto1=$prodotto1->getDettagli();
echo "Prodotto: " . $dettagliProdotto1['Titolo'] . ", Prezzo: " . $dettagliProdotto1['Prezzo'] . ", Categoria: " . $dettagliProdotto1['Categoria'] . " " . $dettagliProdotto1['IconaCategoria'];


?>
