<?php

class ConnexionException extends Exception {
	
	public function __construct() {
		parent::__construct("La connexion à la base de données a échouée !");
	}
	
}

?>