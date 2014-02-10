<?php 

class Equipe {

	private $categorie;
	private $niveau;
	private $photo;
	private $entraineur;



	public function __construct($categorie, $niveau, $photo, $entraineur) {
		$this->categorie = $categorie;
		$this->niveau = $niveau;
		$this->photo = $photo;
		$this->entraineur = $entraineur;
	}



	public function getCategorie() {
		return $this->categorie;
	}
	public function getNiveau() {
		return $this->niveau;
	}
	public function getPhoto() {
		return $this->photo;
	}
	public function getEntraineur() {
		return $this->entraineur;
	}



	public function setCategorie($categorie) {
		$this->categorie = $categorie;
	}
	public function setNiveau($niveau) {
		$this->niveau = $niveau;
	}
	public function setPhoto($photo) {
		$this->photo = $photo;
	}
	public function setEntraineur($entraineur) {
		$this->entraineur = $entraineur;
	}
}

?>