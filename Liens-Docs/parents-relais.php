<?php
	session_start();
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">

	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript">
		function onload() {
			if (<?php echo (isset($_GET['fail'])); ?>) {
				alert("Le login ou le mot de passe est incorrect !");
			}
		}
	</script>


	<title>Parents-Relais - Vertou Basket</title>
</head>
<body onload="onload();">
	<script type="text/javascript">
		$(document).ready(function(){
			$(".dropdown-toggle").dropdown();
		});  
	</script>

	<div class="container">
		
		<!-- HEADER -->
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<header>
						<div class="col-md-3">
							<img class="center-block" src="../img/logo_petit.gif" alt="Logo Vertou Basket">
						</div>
						<div class="col-md-6 text-center">
							<h1>Vertou Basket</h1>
						</div>
						<div class='col-md-3 pull-right'>
							<?php
							if(isset($_SESSION['login'])) {
								echo ("
									<form class='form-horizontal' role='form' action='php/deconnexion.php'>
									  <div class='form-group input-sm'>
									  	<div class='col-md-3'></div>
									    <div class='col-md-9'>
									    	<button type='submit' class='btn btn-default btn-xs center-block'>Déconnexion</button>
									    </div>
									  </div>
									</form>
								");
							}
							else {
								echo ("
									<form class='form-horizontal' role='form' action='php/authentification.php' method='POST'>
									  <div class='form-group input-sm'>
									  	<div class='col-md-3'></div>
									    <div class='col-md-9'>
									    	<label for='inputLogin' class='col-sm-2 control-label'></label>
									      	<input type='text' class='form-control input-sm' id='inputLogin' placeholder='Login' name='login'>
									      	<label for='inputPassword' class='col-sm-2 control-label'></label>
									      	<input type='password' class='form-control input-sm' id='inputPassword' placeholder='Password' name='password'>
									      	<button type='submit' class='btn btn-default btn-xs center-block form-header'>Sign in</button>
									    </div>
									  </div>
									</form>
								");
							}
							?>
						</div>
					</header>
				</div>
				<div class="col-md-1"></div>
			</div>
		<!-- HEADER -->
<<<<<<< HEAD

		<!--NAVBAR -->
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="navbar navbar-inverse" role="navigation">
				        <div class="container-fluid">		          
				          <div class="navbar-collapse collapse">
				            <ul class="nav navbar-nav">
				              <li><a href="../index.php">Accueil</a></li>
				              <li><a href="p../lanning.php">Planning</a></li>
				              <li><a href="../equipes.php">Equipes</a></li>
				              <li><a href="../leClub.php">Le Club</a></li>
				              <li class="dropdown active">
				                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Liens/Docs <b class="caret"></b></a>
				                <ul class="dropdown-menu">
				                  <li class="active"><a href="parents-relais.php">Parents-Relais</a></li>
				                  <li><a href="link.php">Liens</a></li>
				                  <li><a href="rules.php">Réglements</a></li>
				                </ul>
				              </li>
				              <li><a href="../sponsors.php">Sponsors</a></li>
				            </ul>
				          </div>
				        </div>
				    </div>
=======

		<!--NAVBAR -->
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="navbar navbar-inverse" role="navigation">
				        <div class="container-fluid">		          
				          <div class="navbar-collapse collapse">
				            <ul class="nav navbar-nav">
				              <li><a href="../index.php">Accueil</a></li>
				              <li><a href="p../lanning.php">Planning</a></li>
				              <li><a href="../equipes.php">Equipes</a></li>
				              <li><a href="../leClub.php">Le Club</a></li>
				              <li class="dropdown active">
				                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Liens/Docs <b class="caret"></b></a>
				                <ul class="dropdown-menu">
				                  <li class="active"><a href="parents-relais.php">Parents-Relais</a></li>
				                  <li><a href="link.php">Liens</a></li>
				                  <li><a href="rules.php">Réglements</a></li>
				                </ul>
				              </li>
				              <li><a href="../sponsors.php">Sponsors</a></li>
				            </ul>
				          </div>
				        </div>
				    </div>
				</div>
				<div class="col-md-1"></div>
			</div>
		<!--NAVBAR -->

<<<<<<< HEAD
		<!-- MAJ -->
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="alert alert-sucess alert-dismissable">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>MAJ</strong> : Date de maj : <a href="../maj.php" class="alert-link">Listes de toutes les mises à jours</a>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
		<!-- MAJ -->
=======
				<div class="alert alert-sucess alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				  <strong>MAJ</strong> : Date de maj : <a href="../maj.php" class="alert-link">Listes de toutes les mises à jours</a>
>>>>>>> c835f21306189350369f61ac339999d236aadcbd
				</div>
				<div class="col-md-1"></div>
			</div>
		<!--NAVBAR -->

<<<<<<< HEAD
		<!-- MAJ -->
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="alert alert-sucess alert-dismissable">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>MAJ</strong> : Date de maj : <a href="../maj.php" class="alert-link">Listes de toutes les mises à jours</a>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
		<!-- MAJ -->
=======
>>>>>>> eba469c1d0b5b3f28c792d651c1e1b5026b8e8b7
>>>>>>> c835f21306189350369f61ac339999d236aadcbd

		<!-- CONTENU -->
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<h3>Résultats du week-end :</h3>
					
					<div class="col-md-4">
						<div class="panel panel-default">
						 	<!-- Default panel contents -->
							<div class="panel-heading text-center">Panel heading</div>
							<div class="panel-body">
								<p>Contenu de mon panel </p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-default">
						 	<!-- Default panel contents -->
							<div class="panel-heading text-center">Panel heading</div>
							<div class="panel-body">
								<p>Contenu de mon panel </p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-default">
						 	<!-- Default panel contents -->
							<div class="panel-heading text-center">Panel heading</div>
							<div class="panel-body">
								<p>Contenu de mon panel </p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-default">
						 	<!-- Default panel contents -->
							<div class="panel-heading text-center">Panel heading</div>
							<div class="panel-body">
								<p>Contenu de mon panel </p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-default">
						 	<!-- Default panel contents -->
							<div class="panel-heading text-center">Panel heading</div>
							<div class="panel-body">
								<p>Contenu de mon panel </p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
		<!-- CONTENU -->

		<!-- FOOTER -->
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<footer>
						<div class="col-xs-3 col-sm-3 col-md-3">
							<img class="center-block text-center" src="../img/logo_petit.gif" alt="Logo Vertou Basket">
						</div>
						<div class="col-xs-3 col-sm-3 col-md-3">
							<address>
							  <strong>VERTOU BASKET</strong><br>
							  4 ter Rue Alexandre Arnaud<br>
							  44120 Vertou, France<br>
							  <abbr title="Phone">P:</abbr> 0606458075
							</address>
						</div>
						<div class="col-xs-3 col-sm-3 col-md-3">
							<address>
							  <strong>Gymnase des Echalonnières</strong><br>
							  20 Boulevard Luc Dejoie<br>
							  44120 Vertou, France<br>
							  <abbr title="Phone">P:</abbr> 0606458075
							</address>
						</div>
						<div class="col-xs-3 col-sm-3 col-md-3 contact">
							<address>
							  <strong>Baptiste MARTIN</strong><br>
							  <a href="mailto:martin_baptiste@ymail.com">martin_baptiste@ymail.com</a><br>
							  <strong>Arnaud PLASSIER</strong><br>
							  <a href="mailto:arnaud.plassier@gmail.com">arnaud.plassier@gmail.com</a><br>
							</address>
						</div>
					</footer>
				</div>
				<div class="col-md-1"></div>
			</div>
		<!-- FOOTER -->

	</div>
</body>
</html>