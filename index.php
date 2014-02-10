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
	<script type="text/javascript">
		function onload() {
			if (<?php echo (isset($_GET['fail'])); ?>) {
				alert("Le login ou le mot de passe est incorrect !");
			}
		}
	</script>


	<title>Vertou Basket - Accueil</title>
</head>
<body onload="onload();">
	<script type="text/javascript">
		$(document).ready(function(){
			$(".dropdown-toggle").dropdown();
		});  
	</script>

	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<!--HEADER ET NAVBAR -->
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
								      	<button type='submit' class='btn btn-default btn-xs center-block'>Sign in</button>
								    </div>
								  </div>
								</form>
							");
						}
						?>
					</div>
				</header>
		
				<div class="navbar navbar-inverse" role="navigation">
		        <div class="container-fluid">		          
		          <div class="navbar-collapse collapse">
		            <ul class="nav navbar-nav">
		              <li class="active"><a href="index.php">Accueil</a></li>
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
		          </div><!--/.nav-collapse -->
		        </div><!--/.container-fluid -->
		      </div>
			<!--HEADER ET NAVBAR -->


		      <div id="Slider" class="carousel slide">
		        <div class="carousel-inner thumbnail">
		          <div class="item active"> <img alt="" src="img/1.jpg"/>
		            <div class="carousel-caption">
		              <p>Une présentation</p>
		            </div>
		          </div>
		          <div class="item"> <img alt="" src="img/2.jpg"/>
		            <div class="carousel-caption">
		              <p>Un autre présentation</p>
		            </div>
		          </div>
		          <div class="item"> <img alt="" src="img/3.jpg"/>
		            <div class="carousel-caption">
		              <p>Et encore une autre !</p>
		            </div>
		          </div>
		        </div>
		        <a class="left carousel-control" href="#Slider" data-slide="prev">
			    	<span class="glyphicon glyphicon-chevron-left"></span>
			  	</a>
			  	<a class="right carousel-control" href="#Slider" data-slide="next">
			    	<span class="glyphicon glyphicon-chevron-right"></span>
			  	</a>
		    </div>
		
			<script>
			$(function (){
			    $('.carousel').carousel({
				interval: 7500	
			    });
			});  
			</script>
			
			<h3>Résultats du week-end :</h3>


			</div>
			<div class="col-md-1"></div>
		</div>



	</div>	
</body>
</html>