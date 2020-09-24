<?php
/**
 *Extrae toda la data de el sitio web dicelacancion.com
 */


class ExtraerDesdeDLC extends Extractor{

    protected function getNombreArtista()
    {
        return $this->extraerDesdeDLC();
    }

    protected function getNombreCancion()
    {
        // TODO: Implement getNombreCancion() method.
    }

    protected function getLetra()
    {
        // TODO: Implement getLetra() method.
    }

    protected function getLinkYoutube()
    {
        // TODO: Implement getLinkYoutube() method.
    }
}