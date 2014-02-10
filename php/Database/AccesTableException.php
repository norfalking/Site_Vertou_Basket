<?php

class AccesTableException extends Exception {
	
	public function __construct() {
		parent::__construct("Erreur lors de la soumission de la requête !");
	}
	
}

?>