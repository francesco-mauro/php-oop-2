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

class Cibo extends Prodotto {
    public function getTipo() {
        return "Cibo";
    }
}

class Gioco extends Prodotto {
    public function getTipo() {
        return "Gioco";
    }
}

class Cuccia extends Prodotto {
    public function getTipo() {
        return "Cuccia";
    }
}


$categoriaCani = new Categoria("Cani", "🐶");
$categoriaGatti = new Categoria("Gatti", "🐱");


$ciboCani = new Cibo("Cibo per cani", 20.99, $categoriaCani);
$giocoGatti = new Gioco("Gioco per gatti", 10.99, $categoriaGatti);
$cucciaCani = new Cuccia("Cuccia per cani", 50.00, $categoriaCani);


$prodotti = [$ciboCani, $giocoGatti, $cucciaCani];

// Stampa delle card dei prodotti in maniera molto grossolana
foreach ($prodotti as $prodotto) {
    $dettagli = $prodotto->getDettagli();
    echo "<div class='card'>";
    echo "<h2>" . $dettagli['Titolo'] . "</h2>";
    echo "<p>Prezzo: $" . $dettagli['Prezzo'] . "</p>";
    echo "<p>Categoria: " . $dettagli['Categoria'] . " " . $dettagli['IconaCategoria'] . "</p>";
    echo "<p>Tipo: " . $prodotto->getTipo() . "</p>";
    echo "</div>";
}
?>
