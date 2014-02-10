<?php

require_once("ConnexionException.php");
require_once("AccesTableException.php");


class Dao
{  
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



/*
  Equipes
*/
  public function getJoueurs($equipe) {
    try {
      $this->connexion();
      $res = $this->connexion->query("SELECT licence, nom, prenom, telephone, mail FROM adherents, equipes WHERE equipe = '".$equipe."' and id = '".$equipe."'")->fetch(PDO::FETCH_ASSOC)['entraineur'];
      $this->deconnexion();
    }
    catch (PDOException $e) {
      throw new AccesTableException();
    }
    return $res;
  }

  public function getEntraineur($equipe) {
    try {
      $this->connexion();
      $res = $this->connexion->query("SELECT * FROM equipes WHERE id = '".$equipe."'")->fetch(PDO::FETCH_ASSOC)['entraineur'];
      $this->deconnexion();
    }
    catch (PDOException $e) {
      throw new AccesTableException();
    }
    return $res;
  }

  public function getPhoto($equipe) {
    try {
      $this->connexion();
      $res = $this->connexion->query("SELECT * FROM equipes WHERE id = '".$equipe."'")->fetch(PDO::FETCH_ASSOC)['photo'];
      $this->deconnexion();
    }
    catch (PDOException $e) {
      throw new AccesTableException();
    }
    return $res;
  }



  public function getRights($login) {
    try {
      $this->connexion();
      $res = $this->connexion->query("SELECT * FROM users WHERE login = '".$login."'")->fetch(PDO::FETCH_ASSOC)['rights'];
      $this->deconnexion();
    }
    catch (PDOException $e) {
      throw new AccesTableException();
    }
    return $res;
  }

  public function getImg($login) {
    try {
      $this->connexion();
      $res = $this->connexion->query("SELECT * FROM users WHERE login = '".$login."'")->fetch(PDO::FETCH_ASSOC)['img'];
      $this->deconnexion();
    }
    catch (PDOException $e) {
      throw new AccesTableException();
    }
    return $res;
  }

  public function getUsers() {
    try {
      $this->connexion();
      $res = $this->connexion->query("SELECT login FROM users");
      $this->deconnexion();
    }
    catch (PDOException $e) {
      throw new AccesTableException();
    }
    return $res;
  }

  public function addUser($login, $password) {
    try {
      $this->connexion();
      $this->connexion->prepare("INSERT INTO users(login,password) VALUES (:login,:password)")->execute(array('login' => $login, 'password' => sha1($password)));
      $this->deconnexion();
    }
    catch (PDOException $e) {
      throw new AccesTableException();
    }
  }

  public function deconnexion(){
  	$this->connexion = null;
 	}

  public function verifyPassword($login, $password) {
    try {
      $this->connexion();
      $res = $this->connexion->query("SELECT * FROM users WHERE adherent = '".$login."'")->fetch(PDO::FETCH_ASSOC)['mdp'];
      $this->deconnexion();
    }
    catch (PDOException $e) {
      throw new AccesTableException();
    }
    return (sha1($password) == $res);
  }
	
  public function getConnexion(){
    return $this->connexion;
  }

}

?>