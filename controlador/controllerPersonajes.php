<?php

require 'modelo/PersonajesAPI.php';
class controladorPersonajes{
    private $api_personajes;
    public function __construct(){
        $this->api_personajes = new PersonajesAPI();
    }


    public function Listar() {
        $max_page = 42;
        $min_page = 1;
    
        $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
        $personajes = $this->api_personajes->getPersonajes($pagina);
    
        $prev_page = max($pagina - 1, $min_page);
        $next_page = min($pagina + 1, $max_page);
    
        $start_page = max($pagina - 1, $min_page);
        $end_page = min($pagina + 1, $max_page);
    
        require_once 'vista/paginaPersonajes.php';
    }

}
?>