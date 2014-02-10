<?php 

class Match {

	private $id;
	private $date;
	private $categorie;
	private $equipe;
	private $adversaire;



	public function __construct($id, $date, $categorie, $equipe, $adversaire) {
		$this->id = $id;
		$this->date = $date;
		$this->categorie = $categorie;
		$this->equipe = $equipe;
		$this->adversaire = $adversaire;
	}



	public function getId() {
		return $this->id;
	}
	public function getDate() {
		return $this->date;
	}
	public function getCategorie() {
		return $this->categorie;
	}
	public function getEquipe() {
		return $this->equipe;
	}
	public function getAdversaire() {
		return $this->adversaire;
	}



	public function setId($id) {
		$this->id = $id;
	}
	public function setDate($date) {
		$this->date = $date;
	}
	public function setCategorie($categorie) {
		$this->categorie = $categorie;
	}
	public function setEquipe($equipe) {
		$this->equipe = $equipe;
	}
	public function setAdversaire($adversaire) {
		$this->adversaire = $adversaire;
	}
}

?>