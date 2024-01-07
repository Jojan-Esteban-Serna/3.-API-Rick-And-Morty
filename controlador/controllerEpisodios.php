<?php
require 'modelo/EpisodioAPI.php';
class controladorEpisodios{
    private $api_episodios;
    public function __construct(){
        $this->api_episodios = new EpisodioAPI();
    }


    public function Listar(){
        $id_personaje = $_GET['id'];
        $episodios = $this->api_episodios->getEpisodiosConPersonaje($id_personaje);
        require_once 'vista/paginaEpisodios.php';
    }
}

?>