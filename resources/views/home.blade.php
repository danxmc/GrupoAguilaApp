@extends('layouts.app')

@section('content')
<div class="container animated fadeIn">
	<img class="image-center-login" src="/images/logo.png">
</div>

<div class="grid-wrapper animated bounceInRight">
    <a href="/aseguradoras" style="text-decoration: none;">
        <div class="box zone red">
            <img src="/images/box.svg">
            <span class="menu-title">CATÁLOGOS</span>
        </div>
    </a>
    <a href="" style="text-decoration: none;">
        <div class="box zone blue">
            <img src="/images/constructor.svg"><span class="menu-title">FORMULARIO DE TRABAJO</span>
        </div>
    </a>
    <a href="" style="text-decoration: none;">
        <div class="box zone green">
            <img src="/images/screw.svg"><span class="menu-title">FORMULARIO DE MANTENIMIENTO</span>
        </div>
    </a>
    <a href="" style="text-decoration: none;">
        <div class="box zone yellow">
            <img src="/images/no-entry.svg"><span class="menu-title">FORMULARIO DE MANTENIMIENTO PREVENTIVO</span>
        </div>
    </a>
</div>
@endsection
