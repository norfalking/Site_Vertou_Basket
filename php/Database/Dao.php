<?php

require_once("ConnexionException.php");
require_once("AccesTableException.php");
require_once("Adherent.php");
require_once("Match.php");
require_once("Equipe.php");



class Dao {  

  private $host;
  private $database;
  private $user;
  private $password;
  private $connexion;



  public function __construct($host, $database, $user, $password){    
    $this->host = $host;
  	$this->database = $database;
  	$this->user = $user;
  	$this->password = $password;
  }



  public function connexion() 
	{
		try {
			$this->connexion = new PDO('mysql:host='.($this->host).';dbname='.($this->database), ($this->user), ($this->password));	   
			$this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	   
	   }
		catch (PDOException $e)
		{
			throw new ConnexionException();
		}
  }

  public function deconnexion(){
    $this->connexion = null;
  }



// Equipes

  public function getJoueurs($equipe) {
    try {
      $query = $this->connexion->query("SELECT licence, nom, prenom, telephone, mail, photo, role, equipe FROM adherents, equipes WHERE equipe = '".$equipe."' and id = '".$equipe."'");
      $ret = array();
      foreach ($query as $row) {
        $ret[] = new Adherent($row['licence'], $row['nom'], $row['prenom'], $row['telephone'], $row['mail'], $row['photo'], $row['role'], $row['equipe']);
      }
      $this->deconnexion();
    }
    catch (PDOException $e) {
      throw new AccesTableException();
    }
    return $ret;
  }

  public function getEntraineur($equipe) {
    try {
      $this->connexion();
      $query = $this->connexion->query("SELECT licence, nom, prenom, telephone, mail, photo, role, equipe FROM adherents, equipes WHERE id = '".$equipe."'");
      $this->deconnexion();
    }
    catch (PDOException $e) {
      throw new AccesTableException();
    }
    return new Adherent($query['licence'], $query['nom'], $query['prenom'], $query['telephone'], $query['mail'], $query['photo'], $query['role'], $query['equipe']);;
  }

  public function getPhotoEquipe($equipe) {
    try {
      $this->connexion();
      $query = $this->connexion->query("SELECT photo FROM equipes WHERE id = '".$equipe."'");
      $this->deconnexion();
    }
    catch (PDOException $e) {
      throw new AccesTableException();
    }
    return $query;
  }



// Matchs

  public function getMatchs() {
    try {
      $this->connexion();
      $query = $this->connexion->query("SELECT * FROM matchs");
      $ret = array();
      foreach ($query as $row) {
        $ret[] = new Match($row['id'], $row['date'], $row['categorie'], $row['equipe'], $row['adversaire'], $row['score_equipe'], $row['score_adversaire'], $row['lieu']);
      }
      $this->deconnexion();
    }
    catch (PDOException $e) {
      throw new AccesTableException();
    }
    return $ret;
  }

  public function getNiveau($equipe) {
    try {
      $this->connexion();
      $query = $this->connexion->query("SELECT * FROM equipes, matchs WHERE nom = '".$equipe."' and equipe = '".$equipe."'")->fetch(PDO::FETCH_ASSOC)['niveau'];;
      $this->deconnexion();
    }
    catch (PDOException $e) {
      throw new AccesTableException();
    }
    return $query;
  }



  public function verifyPassword($login, $password) {
    try {
      $this->connexion();
      $res = $this->connexion->query("SELECT * FROM users WHERE adherent = '".$login."'")->fetch(PDO::FETCH_ASSOC)['password'];
      $this->deconnexion();
    }
    catch (PDOException $e) {
      throw new AccesTableException();
    }
    return (sha1($password) == $res);
  }

}

?>