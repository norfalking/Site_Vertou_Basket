<?php 

class Adherent {

	private $licence;
	private $nom;
	private $prenom;
	private $telephone;
	private $mail;
	private $photo;
	private $role;
	private $equipe;



	public function __construct($licence, $nom, $prenom, $telephone, $mail, $photo, $role, $equipe) {
		$this->licence = $licence;
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->telephone = $telephone;
		$this->mail = $mail;
		$this->photo = $photo;
		$this->role = $role;
		$this->equipe = $equipe;
	}



	public function getLicence() {
		return $this->licence;
	}
	public function getNom() {
		return $this->nom;
	}
	public function getPrenom() {
		return $this->prenom;
	}
	public function getTelephone() {
		return $this->telephone;
	}
	public function getMail() {
		return $this->mail;
	}
	public function getPhoto() {
		return $this->photo;
	}
	public function getRole() {
		return $this->role;
	}
	public function getEquipe() {
		return $this->equipe;
	}



	public function setLicence($licence) {
		$this->licence = $licence;
	}
	public function setNom($nom) {
		$this->nom = $nom;
	}
	public function setPrenom($prenom) {
		$this->prenom = $prenom;
	}
	public function setTelephone($telephone) {
		$this->telephone = $telephone;
	}
	public function setMail($mail) {
		$this->mail = $mail;
	}
	public function setPhoto($photo) {
		$this->photo = $photo;
	}
	public function setRole($role) {
		$this->role = $role;
	}
	public function setEquipe($equipe) {
		$this->equipe = $equipe;
	}
}

?>