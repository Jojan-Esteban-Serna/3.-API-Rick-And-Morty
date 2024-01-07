<?php

include 'Personaje.php';
include_once 'infraestructura/APICall.php';
include 'EpisodioAPI.php';
class PersonajesAPI{
    private $url ;

    public function __construct() {
        $this->url = "https://rickandmortyapi.com/api/character/";
    }


    public function getPersonajes($pagina=1){
        $res = api_call($this->url."?page=".$pagina);
        $res = json_decode($res,true);

        $personajes = array();
        foreach ($res['results'] as $result) {
            $id = $result['id'];
            $nombre = $result['name'];
            $estado = $result['status'];
            $tipo = $result['species'];
            $imagen = $result['image'];
            $personaje = new Personaje($id,$nombre, $estado, $tipo, $imagen);
            array_push($personajes, $personaje);
        }

        return $personajes;
    }



}


?>