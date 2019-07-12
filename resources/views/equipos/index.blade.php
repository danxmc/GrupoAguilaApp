@extends('layouts.test')

@section('content')
@if(count($Equipos)>=1)


<h1 style="text-align:center">Equipos</h1>
<div style="padding-left:20px" class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <img src="https://i.ibb.co/5rgPCPh/user.png"> ID
    </button>
    <button type="button" class="btn btn-dark"><img src="https://i.ibb.co/Rc2jrPt/sync.png"> Filtrar</button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <button class="dropdown-item" type="button">1</button>
        <button class="dropdown-item" type="button">2</button>
        <button class="dropdown-item" type="button">3</button>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

    <a class="navbar-brand" href="#"> </a>
    <!---------EXCEL--------->
    <button formaction="{{ url('downloadExcel/xlsx') }}" name="excel" type="submit" class="btn btn-outline-secondary"><img
            src="https://i.ibb.co/2kF7NQf/file-times.png"></button>

    <a class="navbar-brand" href="#"> </a>

    <!---------AGREGAR--------->
    <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#Agregar">
        <img src="https://i.ibb.co/Mgf32HZ/plus.png">
    </button>

    <!-- AGREGAR POP -->
    <div class="modal fade" id="Agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Agregar Equipo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{url('equipos')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="noeco">No.Eco</label>
                            <input type="text" class="form-control" name="noeco" id="noeco" placeholder="#">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion"
                                placeholder="Descripción">
                        </div>

                        <div class="form-group">
                            <label for="marca">Marca</label>
                            <input type="text" class="form-control" name="marca" id="marca" placeholder="Marca">
                        </div>

                        <div class="form-group">
                            <label for="modelo">Modelo</label>
                            <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo">
                        </div>

                        <div class="form-group">
                            <label for="serie-motor">No. de Serie del Motor</label>
                            <input type="text" class="form-control" name="serie-motor" id="serie-motor"
                                placeholder="No. Serie">
                        </div>

                        <div class="form-group">
                            <label for="capacidad">Capacidad</label>
                            <input type="int" class="form-control" name="capacidad" id="capacidad">
                        </div>

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="customFileLang" id="customFileLang"
                                lang="es">
                            <label class="custom-file-label" for="customFileLang">Imagen de descripción</label>
                        </div>

                        <div class="form-group">
                            <label for="tipo-motor">Tipo de motor</label>
                            <input type="text" class="form-control" name="tipo-motor" id="tipo-motor">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <a class="navbar-brand" href="#"> </a>



    <!---------EDITAR--------->
    <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#Editar">
        <img src="https://i.ibb.co/xY0NYZf/edit.png">
    </button>


    <div class="modal fade" id="Editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Editar Equipo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ action('EquiposController@update') }}" enctype="multipart/form-data">
                        @method("PUT")
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">ID</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="id">
                                @foreach ($Equipos as $Equipo)
                                <option value="{{ $Equipo->id }}">{{$Equipo->id}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="noeco">No.Eco</label>
                            <input type="text" class="form-control" name="noeco" id="noeco" placeholder="#">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion"
                                placeholder="Descripción">
                        </div>

                        <div class="form-group">
                            <label for="marca">Marca</label>
                            <input type="text" class="form-control" name="marca" id="marca" placeholder="Marca">
                        </div>

                        <div class="form-group">
                            <label for="modelo">Modelo</label>
                            <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo">
                        </div>

                        <div class="form-group">
                            <label for="serie-motor">No. de Serie del Motor</label>
                            <input type="text" class="form-control" name="serie-motor" id="serie-motor"
                                placeholder="No. Serie">
                        </div>

                        <div class="form-group">
                            <label for="capacidad">Capacidad</label>
                            <input type="int" class="form-control" name="capacidad" id="capacidad">
                        </div>

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="customFileLang" id="customFileLang"
                                lang="es">
                            <label class="custom-file-label" for="customFileLang">Imagen de descripción</label>
                        </div>

                        <div class="form-group">
                            <label for="tipo-motor">Tipo de motor</label>
                            <input type="text" class="form-control" name="tipo-motor" id="tipo-motor">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <a class="navbar-brand" href="#"> </a>
</nav>

<a class="navbar-brand" href="#"> </a>
<div class="axis-table-scroll">
    <div class="axis-table-data">
        <table class="table-data table table-striped">
            <thead>
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
                @foreach ($Equipos as $Equipo)
                <tr>
                    <td>{{$Equipo->id}}</td>
                    <td>{{$Equipo->No_Eco}}</td>
                    <td>{{$Equipo->Descripcion}}</td>
                    <td>{{$Equipo->Marca}}</td>
                    <td>{{$Equipo->Modelo}}</td>
                    <td>{{$Equipo->No_Serie_Motor}}</td>
                    <td>{{$Equipo->Capacidad}}</td>
                    <td>{{$Equipo->Imgn}}</td>
                    <td>{{$Equipo->Tipo_Motor}}</td>
                    <td>
                        <!---------ELIMINAR--------->
                        <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                            data-target="#Eliminar{{$Equipo->id}}">
                            <img src="https://i.ibb.co/MVb6p82/trash-alt.png">
                        </button>


                        <div class="modal fade" id="Eliminar{{$Equipo->id}}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-cente red" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Eliminar Equipo</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method='POST' action="{{ url('equipos', [$Equipo->id]) }}">
                                            @method('DELETE')
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="nombre-usuario">Se perderá el registro permanente una vez
                                                    eliminando el Equipo
                                                    ¿Desea Eliminar Equipo?</label>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Aceptar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@else
<p>No se encontraron equipos</p>
@endif
@endsection
