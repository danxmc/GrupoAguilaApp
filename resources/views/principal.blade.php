@extends('layouts.log')

@section('content')
    <div class="col-sm-12 login-right">
		<!--<div class="col-md-4 col-md-offset-4">-->
			<div class="login-form">
				<form>
				  <img src="{{ asset('images/logo.png') }}" class="image-center-login animated fadeInDown">
				  <h4 class="login-title animated fadeInUp">CONTROL DE MANTENIMIENTOS Y TRABAJOS</h4>
				  <div class="card-block animated zoomIn">
				  	<h6>Introduzca sus credenciales de acceso</h6>
					  <div class="form-group has-error has-danger">
					    <input type="text"  id="user" name="usuario" class="form-control"  placeholder="Usuario" >

                          <span id="username" > </span>
                          <br>
                          <input type="text"  id="pass" name="password" class="form-control"  placeholder="Password" >
                              <span id="passwords" style="color: red";> </span>

					   <div class="help-block with-errors">
					  	<!--<ul class="list-unstyled">
					  		<li>Formato de usuario no valido</li>
					  	</ul>-->
					   </div>
					  </div>

					  <div class="form-group">

					  </div>
					  <div class="help-block with-errors">
					  	<!--<ul class="list-unstyled">
					  		<li>Formato de usuario no valido</li>
					  	</ul>-->
					  </div>
					  <div class="form-group">
					  	<button onclick="/nav" class="btn btn-login btn-block" >Entrar</button>
					  </div>
				  </div>
				</form>
			</div>
	</div>
@endsection