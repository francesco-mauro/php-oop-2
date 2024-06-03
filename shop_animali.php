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

$categoriaCani = new Categoria("Cani", "🐶");
echo "Categoria: " . $categoriaCani->getNome() . " " . $categoriaCani->getIcona();


?>
