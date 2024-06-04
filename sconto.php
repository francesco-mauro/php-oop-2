<?php

trait Sconto {
    // sconto impostato su 0 per iniziare
    private $sconto = 0;

    public function setSconto($sconto){
        if($sconto < 0 || $sconto > 100){
            throw new InvalidScontoException("Lo sconto deve essere compreso tra 0% e 100%");
        }
    }

}

?>