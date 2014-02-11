<?php 

class Match {

	private $id;
	private $date;
	private $categorie;
	private $equipe;
	private $adversaire;
	private $score_equipe;
	private $score_adversaire;
	private $lieu;



	public function __construct($id, $date, $categorie, $equipe, $adversaire, $score_equipe, $score_adversaire, $lieu) {
		$this->id = $id;
		$this->date = $date;
		$this->categorie = $categorie;
		$this->equipe = $equipe;
		$this->adversaire = $adversaire;
		$this->score_equipe = $score_equipe;
		$this->score_adversaire = $score_adversaire;
		$this->lieu = $lieu;
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
	public function getScore_equipe() {
		return $this->score_equipe;
	}
	public function getScore_adversaire() {
		return $this->score_adversaire;
	}
	public function getLieu() {
		return $this->lieu;
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
	public function setLieu($lieu) {
		$this->lieu = $lieu;
	}
}

?>