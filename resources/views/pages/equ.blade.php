@extends('layouts.test')

@section('content')
<div class="axis-table-scroll">
  

  <div class="axis-table-data">
    <table class="table-data table table-striped">
      <thead>
        <h1 style="text-align:center">Registro de equipos</h1>
        <div style="padding-bottom:20px" class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="https://i.ibb.co/5rgPCPh/user.png"> ID
          </button>
          <button type="button" class="btn btn-dark"><img src="https://i.ibb.co/Rc2jrPt/sync.png"> Filtrar</button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <button class="dropdown-item" type="button">1</button>
            <button class="dropdown-item" type="button">2</button>
            <button class="dropdown-item" type="button">3</button>
          </div>
        </div>
        <tr>
         <th>ID</th>
          <th>No. Eco</th>
          <th>Desc.</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>No. Serie Motor</th>
          <th>Capacidad</th>
          <th>Imagen. desc</th>
          <th>Tipo de motor</th>
              
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
  </div>
</div>
@endsection