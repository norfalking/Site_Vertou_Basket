<?php
	session_start();
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
<<<<<<< HEAD
	<script type="text/javascript">
		function onload() {
			if (<?php echo (isset($_GET['fail'])); ?>) {
				alert("Le login ou le mot de passe est incorrect !");
			}
		}
	</script>


	<title>MAJ - Vertou Basket</title>
=======

	<title>Mises à Jour - Vertou Basket</title>
>>>>>>> eba469c1d0b5b3f28c792d651c1e1b5026b8e8b7
</head>
<body onload="onload();">
	<script type="text/javascript">
		$(document).ready(function(){
			$(".dropdown-toggle").dropdown();
		});  
	</script>
<<<<<<< HEAD

	<div class="container">
		
		<!-- HEADER -->
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
=======
	
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<!--HEADER ET NAVBAR -->
>>>>>>> eba469c1d0b5b3f28c792d651c1e1b5026b8e8b7
					<header>
						<div class="col-md-3">
							<img class="center-block" src="img/logo_petit.gif" alt="Logo Vertou Basket">
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
<<<<<<< HEAD
				</div>
				<div class="col-md-1"></div>
			</div>
		<!-- HEADER -->

		<!--NAVBAR -->
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
=======
		
>>>>>>> eba469c1d0b5b3f28c792d651c1e1b5026b8e8b7
					<div class="navbar navbar-inverse" role="navigation">
				        <div class="container-fluid">		          
				          <div class="navbar-collapse collapse">
				            <ul class="nav navbar-nav">
				              <li><a href="index.php">Accueil</a></li>
				              <li><a href="planning.php">Planning</a></li>
				              <li><a href="equipes.php">Equipes</a></li>
				              <li><a href="leClub.php">Le Club</a></li>
				              <li class="dropdown">
				                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Liens/Docs <b class="caret"></b></a>
				                <ul class="dropdown-menu">
				                  <li><a href="Liens-Docs/parents-relais.php">Parents-Relais</a></li>
				                  <li><a href="Liens-Docs/link.php">Liens</a></li>
				                  <li><a href="Liens-Docs/rules.php">Réglements</a></li>
				                </ul>
				              </li>
				              <li><a href="sponsors.php">Sponsors</a></li>
				            </ul>
<<<<<<< HEAD
				          </div>
				        </div>
				    </div>
				</div>
				<div class="col-md-1"></div>
			</div>
		<!--NAVBAR -->

		<!-- CONTENU -->
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<h2>LISTE DES MISES A JOUR EFFECTUEES</h2>
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
							<img class="center-block text-center" src="img/logo_petit.gif" alt="Logo Vertou Basket">
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
=======
				          </div><!--/.nav-collapse -->
				        </div><!--/.container-fluid -->
			     	</div>
				<!--HEADER ET NAVBAR -->


				<!--FOOTER -->
				<footer>
		        	<div class="col-xs-3 col-sm-3 col-md-3">
						<img class="center-block text-center" src="img/logo_petit.gif" alt="Logo Vertou Basket">
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
		    <!--FOOTER -->


			</div>
			<div class="col-xs-1 col-sm-1 col-md-1"></div>
		</div>



	</div>	
>>>>>>> eba469c1d0b5b3f28c792d651c1e1b5026b8e8b7
</body>
</html>