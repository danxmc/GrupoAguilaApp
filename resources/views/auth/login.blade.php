@extends('layouts.app')

@section('content')
<div class="bg">
	<div class="col-sm-12 login-right">
        <div class="login-form">
            <form class="ff" data-toggle="validator" method="POST" action="{{ route('login') }}">
                @csrf

				<img src="images/logo.png" class="image-center-login animated fadeInDown">
                <h4 class="login-title animated fadeInUp">CONTROL DE MANTENIMIENTOS Y TRABAJOS</h4>
				<div class="card-block animated zoomIn">
                    <h6>Introduzca sus credenciales de acceso</h6>

                    <div class="form-group has-error has-danger">
                        <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Usuario">

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif


                        <!--<input name="usuario" type="text" class="form-control" required="required" placeholder="Usuario">-->
                        <div class="help-block with-errors"></div>
					</div>

					<div class="form-group">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                    </div>

                    <div class="help-block with-errors"></div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-login btn-block">
                            {{ __('Entrar') }}
                        </button>
					</div>

                </div>

			</form>
	    </div>
    </div>
</div>
@endsection
