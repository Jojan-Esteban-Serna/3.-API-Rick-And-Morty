<?php
class Episodio{
    private $episodio;
    private $nombre;

    public function __construct($episodio, $nombre) {
        $this->episodio = $episodio;
        $this->nombre = $nombre;
    }

    public function getNombreEpisodio(){
        return $this->episodio . " - " . $this->nombre;
    }

	/**
	 * @return mixed
	 */
	public function getEpisodio() {
		return $this->episodio;
	}
	
	/**
	 * @param mixed $episodio 
	 * @return self
	 */
	public function setEpisodio($episodio): self {
		$this->episodio = $episodio;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getNombre() {
		return $this->nombre;
	}
	
	/**
	 * @param mixed $nombre 
	 * @return self
	 */
	public function setNombre($nombre): self {
		$this->nombre = $nombre;
		return $this;
	}
}
?>