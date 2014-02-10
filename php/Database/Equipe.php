<?php 

class Equipe {

	private $id;
	private $categorie;
	private $photo;
	private $entraineur;



	public function __construct($id, $categorie, $photo, $entraineur) {
		$this->id = $id;
		$this->categorie = $categorie;
		$this->photo = $photo;
		$this->entraineur = $entraineur;
	}



	public function getId() {
		return $this->id;
	}
	public function getCategorie() {
		return $this->categorie;
	}
	public function getPhoto() {
		return $this->photo;
	}
	public function getEntraineur() {
		return $this->entraineur;
	}



	public function setId($id) {
		$this->id = $id;
	}
	public function setCategorie($categorie) {
		$this->categorie = $categorie;
	}
	public function setPhoto($photo) {
		$this->photo = $photo;
	}
	public function setEntraineur($entraineur) {
		$this->entraineur = $entraineur;
	}
}

?>