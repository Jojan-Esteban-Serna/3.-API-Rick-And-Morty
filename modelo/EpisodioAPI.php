<?php
include_once 'infraestructura/APICall.php';
include 'Episodio.php';
class EpisodioAPI{
    private $url;

    public function __construct(){
        $this->url = "https://rickandmortyapi.com/api/episode/";
    }


    public function getEpisodio($numEpisodio){
        $res = api_call($this->url.$numEpisodio);
        $res = json_decode($res,true);
        $episodio = new Episodio($res['episode'],$res['name']);
        return $episodio;
    }

    public static function getEpisodioConURL($url){
        $res = api_call($url);
        $res = json_decode($res,true);
        $episodio = new Episodio($res['episode'],$res['name']);
        return $episodio;
    }


    public static function getEpisodiosConPersonaje($idPersonaje){

        $personaje = api_call("https://rickandmortyapi.com/api/character/".$idPersonaje);
        $personaje = json_decode($personaje,true);
        $urls = $personaje['episode'];

        $res = multi_api_call($urls);
        $episodios = array();
        foreach ($res as $episodio) {
            $episodio = json_decode($episodio,true);
            $episodio = new Episodio($episodio['episode'],$episodio['name']);
            array_push($episodios, $episodio);
        }
        return $episodios;
    }
}
?>