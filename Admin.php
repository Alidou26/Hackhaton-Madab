<?php
session_start();

include('BaseDeDonnees.php');


include('AfficheStat.php');

?>


<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="logo.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="assets/css/dark-theme.css" />
	<link rel="stylesheet" href="assets/css/semi-dark.css" />
	<link rel="stylesheet" href="assets/css/header-colors.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<title>PAVE ENERGY</title>

    
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="logo.png" class="logo-icon" >
				</div>
				<div>
					<h4 class="logo-text" style="font-size:1.4em;">PAVE ENERGY</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul  id="menu">
			<li>
					<a href="Admin.php">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				<li>
					
				</li>
				<li>
					<a href="deconnexionAction.php">
						<div class="parent-icon"><i class='bx bx-log-out'></i>
						</div>
						<div class="menu-title">Déconnexion</div>
					</a>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
				
					<div class="top-menu ms-auto" style="visibility:hidden;">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item mobile-search-icon">
								<a class="nav-link" href="#">	<i class='bx bx-search'></i>
								</a>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">	<i class='bx bx-category'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<div class="row row-cols-3 g-3 p-3">
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-cosmic text-white"><i class='bx bx-group'></i>
											</div>
											<div class="app-title">Teams</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-burning text-white"><i class='bx bx-atom'></i>
											</div>
											<div class="app-title">Projects</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-lush text-white"><i class='bx bx-shield'></i>
											</div>
											<div class="app-title">Tasks</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-kyoto text-dark"><i class='bx bx-notification'></i>
											</div>
											<div class="app-title">Feeds</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-blues text-dark"><i class='bx bx-file'></i>
											</div>
											<div class="app-title">Files</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-moonlit text-white"><i class='bx bx-filter-alt'></i>
											</div>
											<div class="app-title">Alerts</div>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large"  style="visibility:hidden;">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									
									<div class="header-notifications-list">
									
									
				
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Notifications</div>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								
								<div class="dropdown-menu dropdown-menu-end">
								
									<div class="header-message-list">
									
									
									
										
									</div>
									
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="admin.png" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0"><?=$_SESSION['nom']?> <?=$_SESSION['prenom']?></p>
								
							</div>
						</a>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			
		<div class="page-content">
					
					<div class="row row-cols-1 row-cols-md-2 row-cols-xl-5">
					
						<div class="col">
							<div class="card radius-10 overflow-hidden">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-secondary font-14">Energie Produite</p>
											<h5 class="my-0"><?=$qteP['total']?> Kwh</h5>
										</div>
										<div class="text-danger ms-auto font-30"> 
										</div>
									</div>
								</div>
								<div class="mt-1" id="chart2"></div>
							</div>
						</div>
						<div class="col">
							<div class="card radius-10 overflow-hidden">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-secondary font-14"> Total Energie vendue</p>
											<h5 class="my-0"><?=round($qteV['montant'],2)?> DH</h5>
										</div>
										<div class="text-danger ms-auto font-30">
										</div>
									</div>
								</div>
								<div class="mt-1" id="chart6"></div>
							</div>
						</div>
						<div class="col">
							<div class="card radius-10 overflow-hidden">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-secondary font-14">Energie Redistribuée</p>
											<h5 class="my-0"><?=$qteE['quantite']?> Kwh</h5>
										</div>
										<div class="text-warning ms-auto font-30"><i class="fa-regular fa-lightbulb-cfl-on"></i>
										</div>
									</div>
								</div>
								<div class="mt-1" id="chart4"></div>
							</div>
						</div>
						<div class="col">
							<div class="card radius-10 overflow-hidden">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-secondary font-14">Total utilisateurs</p>
											<h5 class="my-0"><?=$qteU['nbr']?></h5>
										</div>
										<div class="text-success ms-auto font-30"><i class='bx bx-group'></i>
										</div>
									</div>
								</div>
								<div class="mt-1" id="chart3"></div>
							</div>
						</div>

						
					
						<div class="col">
							<div class="card radius-10 overflow-hidden">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-secondary font-14">Nombre Total de pas </p>
											<h5 class="my-0"><?=$qtePA['nbrPas']?> Pas</h5>
										</div>
										<div class="text-info ms-auto font-30">
										</div>
									</div>
								</div>
								<div class="mt-1" id="chart5"></div>
							</div>



							
						</div>

						
					  </div><!--end row-->
	
					 <div class="card radius-10">
						<div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <h6 class="mb-0">Les Opérations</h6>
							   </div>
							  
						   </div>
						<div class="table-responsive">
						  <table class="table align-middle mb-0">
						   <thead class="table-light">
							<tr>
							  <th>Photo</th>
							  <th>Nom</th>
							  <th>Prenom</th>
							  <th>Status</th>
							  <th>Qte Produite</th>
							  <th>Montant</th>
							  <th>Type Operation</th>
							  <th>Numero Bancaire</th>
							  <th>Valider</th>
							</tr>
							</thead>
							<tbody>

							<?php foreach($reqTu as $re){ ?>

							<tr>
							
							
							
							<td> <a href="profil.php?id_utilisateur=<?=$re['id_utilisateur']?>">	<img src="<?=$re['photo']?>" class="product-img-2" alt="product img"></a></td>
							
							 <td><a href="profil.php?id_utilisateur=<?=$re['id_utilisateur']?>" style="color:black;"><?=$re['nom']?></a></td>
				             <td><?=$re['prenom']?></td>
						
							 <?php if($re['status']=="EN COURS"){?>

							 <td><span class="badge bg-gradient-blooker text-white shadow-sm w-100"><?=$re['status']?></span></td>

							 <?php }else{?>

							 <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100"><?=$re['status']?></span></td>

							 <?php }?>

							 <td><?=$re['qte_produite']?></td>
							 <td><?=$re['montant']?></td>
							 <td><?=$re['type']?></td>
							 <td><?=$re['numero_bancaire']?></td>
							 <?php if($re['status']=="TRAITE"){?>
							 <td> <button class="btn btn-primary"></button> </td>
							 <?php }else{?>

								<td> <a href="traiter.php?id=<?=$re['id_utilisateur']?>&idOperation=<?=$re['id_operation']?>"><button class="btn btn-primary">Traité</button></a> </td>
								<?php }?>

							</tr>
							
							
		                   <?php }?>
							
						   </tbody>
						 </table>
						 </div>
						</div>
				   </div>
	
				</div>
	
	
	
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button-->
		  <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2023.PaveEnergy</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Parametre </h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<h6 class="mb-0">Theme du Style</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
					<label class="form-check-label" for="lightmode">Light</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
					<label class="form-check-label" for="darkmode">Dark</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
					<label class="form-check-label" for="semidark">Semi Dark</label>
				</div>
			</div>
			<hr/>
		

			<hr/>
			<h6 class="mb-0">Couleur du Navbar</h6>
			<hr/>
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
					</div>
				</div>
			</div>
		</div>
        <script>

setInterval(function () {

	    if ("geolocation" in navigator) {
        console.log("localisation valable");

        navigator.geolocation.getCurrentPosition((position) => {
          var lat = position.coords.latitude;
          var lon = position.coords.longitude;
          var myLatLng = {lat,lon};
		  console.log(myLatLng);

		  $.ajax({
            type: 'POST',
            url: 'compteur.php',
            data: {lat:lat,lon:lon},
            dataType: 'json',
            success: function(){
                 
                }
                
            });
		
	});
	}
	

}, 2500);
 
    </script>

	<script>

setInterval(function () {

	$.ajax({
            type: 'POST',
            url: 'afficheInfo.php',
            data: {},
            dataType: 'json',
            success: function(res){
                 pas.textContent=res['pas'];
				 qte.textContent=res['qte_produite']+' Kwh';
				 soldeT.textContent=Math.round(res['solde_total']*100)/100 +' DH';
				 soldeD.textContent=Math.round(res['solde_dispo']*100)/100 +' DH';
			
                }
                
            });

}, 500);

	</script>

		<script src="assets/js/bootstrap.bundle.min.js"></script>
		<!--plugins-->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
		<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
		<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	
		<script src="assets/plugins/chartjs/js/Chart.min.js"></script>
		<script src="assets/plugins/chartjs/js/Chart.extension.js"></script>
		<script src="assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
		<!--Morris JavaScript -->
		<script src="assets/js/index2.js"></script>
		<!--app JS-->
		<script src="assets/js/app.js"></script>

  
</body>

</html>