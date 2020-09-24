<?php


trait ExtraerNombreArtista
{
    /**
     * Extrae el nombre como lo hace DiceLaCancion
     */
    public function extraerDesdeDLC(){
        preg_match("/<h2 class=\"artistTitle\">(.*)<\/h2>/ui", $this->data, $coincidencias);
        return strip_tags($coincidencias[1]);
    }

}