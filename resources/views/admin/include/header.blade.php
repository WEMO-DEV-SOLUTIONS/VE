		
		
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">

				<h3 style="margin-top:12px; margin-left:2px;"><b>Nations pour l'eternel</b></h3>	

			</div>
			<!-- end navbar-header -->
			
			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				<li class="navbar-form">
					<form action="#" method="POST" name="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Recherche" />
							<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
						</div>
					</form>
                </li>
                
				<li class="dropdown navbar-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span class="d-none d-md-inline">Nom de l'admin</span> <b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="{{route('logout')}}" class="dropdown-item">Deconnexion</a>
						<div class="dropdown-divider"></div>
					</div>
				</li>
			</ul>
			<!-- end header-nav -->
		</div>
		<!-- end #header -->