<?php /*include('class/segurity.php');*/ ?>
<!DOCTYPE html>
<html lang="es-CO">
	<head>
		<meta charset="utf-8">
		<title>ltiviaOT</title>
		<meta name="keywords" content=""/>
	    <meta name="description" content=""/>
	    <meta name="googlebot" content="index,follow"/>
	    <meta name="author" content="Ing. Jonathan Olier Miranda"/>
	    <meta name="copyright" content="Todos los derechos reservados por AltiviaOT.com"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/assets/css/altiviaot.min.css" rel="stylesheet">
		<style type="text/css">
			body{
				padding-top: 60px;
                padding-bottom: 40px;
                background-image: url("theme/img/blue-gradient-bg.png");
                background-repeat: repeat-x;
                background-color: #002958;
			}
			footer{ color: #fff; }
		</style>
		<link href="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/assets/css/altiviaot-responsive.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/assets/js/html5shiv.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/fav.ico">
	</head>
	<body>
		<div class="navbar navbar-fixed-top navbar-inverse">
			<div class="navbar-inner">
            	<div class="container">
                	<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    	<span class="icon-bar"></span>
                    	<span class="icon-bar"></span>
                    	<span class="icon-bar"></span>
                  	</a>
                  	<a class="brand" href="#">Title</a>
                  	<div class="nav-collapse collapse navbar-responsive-collapse">
                    	<ul class="nav">
	                      	<li class="active"><a href="#">Home</a></li>
	                      	<li><a href="#">About</a></li>
	                      	<li><a href="#">Contacts</a></li>
	                    </ul>
	                    <ul class="nav pull-right">
	                      	<li class="divider-vertical"></li>
	                      	<li class="dropdown">
	                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Username <b class="caret"></b></a>
	                        	<ul class="dropdown-menu">
	                          		<li><a href="#">Action</a></li>
	                          		<li><a href="#">Another action</a></li>
	                          		<li><a href="#">Something else here</a></li>
	                          		<li class="divider"></li>
	                          		<li><a href="#">Separated link</a></li>
	                        	</ul>
	                      	</li>
	                    </ul>
                	</div>
            	</div>
        	</div>
        </div>

		<div class="modal hide" id="myModalSession">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">&times;</a>
				<h3>Modal header</h3>
			</div>
			<div class="modal-body">
				<p>One fine body…</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn btn-primary">Save changes</a>
				<a href="#" class="btn" data-dismiss="modal">Close</a>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span3">
					<div class="well sidebar-nav">
						<ul class="nav nav-list">
							<li class="nav-header">Sidebar</li>
							<li class="active"><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li class="nav-header">Sidebar</li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li class="nav-header">Sidebar</li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
						</ul>
					</div>
				</div>
				<div class="span9">
					<?php if() ?>
				  	<div id="eventos" class="well">
				  		<h4>Eventos #</h4>
			  			<span class="label label-info">Pendientes 1</span>
			  			<span class="label label-success">Completados 5</span>
			  			<span class="label label-important">Cerrados 3</span>
			  			<br>
			  			<br>
				  		<div class="evento alert alert-info">
				  			<button class="close">&times;</button>
				  			<div class="">
				  				<a href="">Asunto</a>
				  				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				  					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				  					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				  					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				  					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				  				</p>
				  			</div>
				  			<ul class="nav">
				  				<li><span class="label">ID</span></li>
				  				<li><span class="label"><i class="icon-time"></i> 09:07pm</span></li>
				  				<li><span class="label"><i class="icon-calendar"></i> 24/08/2013</span></li>
				  			</ul>
				  		</div>
				  	</div>
				</div>
			</div>
		  	<hr>
			<footer><p>&copy; <a href="http://altiviaot.com/">AltiviaOT</a> 2012</p></footer>
		</div>

		<script src="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/assets/js/jquery.min.js"></script>
		<script src="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/assets/js/bootstrap-transition.js"></script>
		<script src="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/assets/js/bootstrap-alert.js"></script>
		<script src="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/assets/js/bootstrap-modal.js"></script>
		<script src="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/assets/js/bootstrap-dropdown.js"></script>
		<script src="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/assets/js/bootstrap-scrollspy.js"></script>
		<script src="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/assets/js/bootstrap-tab.js"></script>
		<script src="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/assets/js/bootstrap-tooltip.js"></script>
		<script src="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/assets/js/bootstrap-popover.js"></script>
		<script src="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/assets/js/bootstrap-button.js"></script>
		<script src="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/assets/js/bootstrap-collapse.js"></script>
		<script src="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/assets/js/bootstrap-carousel.js"></script>
		<script src="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/assets/js/bootstrap-typeahead.js"></script>
	</body>
</html>