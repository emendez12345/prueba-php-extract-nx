<?php
include_once("ExtraerNombreArtista.php");

abstract class Extractor
{
    use ExtraerNombreArtista;


    protected $url;
    protected $data;

    public function __construct($url){
        $this->url = $url;
        $this->data = $this->getDataFrom($url);
    }
    /**
     * Devuelve el nombre del artista
     * @return string
     */
    abstract protected function getNombreArtista();

    /**
     * Devuelve el nombre de la cancion
     * @return string
     */
    abstract protected function getNombreCancion();

    /**
     * Devuelve la letra
     * @return string
     */
    abstract protected function getLetra();

    /**
     * Devuelve el link de youtube
     * @return string
     */
    abstract protected function getLinkYoutube();



    /**
     * Me devueve la info de la url
     * @param $url
     * @return string
     */
    protected function getDataFrom($url){
        return file_get_contents($url);
    }

    /**
     * Devuelve un arreglo con todos los datos extraidos
     * @return array
     */
    public function getTodosLosDatos(){
        $data = [
            'artista'=>$this->getNombreArtista(),
          //  'cancion'=>'Ora por mi',
          //  'Letra'=>"Tu vas a orar por mi \n\n O vas a hablar de mi \n \n Tu vas a orar por mi...",
          //  'youtube'=>'https://www.youtube.com/watch?v=WgleotOiJ4c'
        ];

        return $data;
    }
}