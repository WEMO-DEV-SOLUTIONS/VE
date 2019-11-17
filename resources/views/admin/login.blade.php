@extends('layout/loginLayout')

@section('content')

	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin login-cover -->
	<div class="login-cover">
		<div class="login-cover-image"  data-id="login-cover-image"></div>
		<img src="img/calltoactionbg.jpg" alt="">
		<div class="login-cover-bg">
			
		</div>
	</div>
	<!-- end login-cover -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login login-v2" data-pageload-addclass="animated fadeIn">
				@include('partials.error')
			<!-- begin brand -->
			<div class="login-header">
				<div class="brand">
					<span class=""></span> <b>LOGIN</b>
					<small>Page de connexion</small>
				</div>
				<div class="icon">
					<i class="fa fa-lock"></i>
				</div>
			</div>
			<!-- end brand -->

			<!-- begin login-content -->
			<div class="login-content">
				<form action="{{route('login')}}" method="POST" class="margin-bottom-0">

					@csrf
					

					<div class="form-group m-b-20">
						<input type="text" class="form-control form-control-lg" placeholder="Adresse email" required  name="login"/>
					</div>
					<div class="form-group m-b-20">
						<input type="password" class="form-control form-control-lg" placeholder="Mot de passe" required  name="pass"/>
					</div>
					<div class="login-buttons">
						<button type="submit" class="btn btn-primary btn-block btn-lg">Connexion</button> <br>
						<a href="{{route('home')}}"><button type="submit" class="btn btn-secondary btn-block btn-sm">Revenir au site</button></a>
					</div>
				</form>
			</div>
			<!-- end login-content -->
		</div>
		<!-- end login -->
		
	
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	
</body>


</html>
@endsection