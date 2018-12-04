@extends('layouts.app')

@section('content')


            <div class="panel panel-primary">
                <div class="panel-heading">Formulario de Alta de bienes</div>

                <div class="panel-body">

                    @if (session('notification'))
                        <div class="alert alert-success">
                            {{ session('notification') }}
                        </div>
                    @endif    

                    @if (count($errors) > 0)
                        </div class="alert alert-danger">

                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif    
                            
                 <form action="" method="POST">
                    {{ csrf_field() }}

                        <div class="col-md-6">
                            </br>
                                <table>
                                    <tr>
                                        <td><label for="proveedor">Proveedor:</label></td>
                                        <td><input type="text" name="proveedor" class="form-control" value="{{ old('proveedor') }}"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="ordendecompra">Orden de Compra:</label></td>
                                        <td><input type="text" name="ordendecompra" class="form-control" value="{{ old('ordendecompra') }}"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="proveedor">Factura:</label></td>
                                        <td><input type="text" name="factura" class="form-control" value="{{ old('factura') }}"></td>
                                    </tr>
                                </table>
                        </div>

                        <div class="row">
                        </br>
                            <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td><label for="proveedor">Fecha:&nbsp&nbsp</label></td>
                                        <td><input class="form-control" type="date" placeholder="Date" name="fecha"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>

                            </div>


                        </div>

                    </br>

                        <div class="col-md-6">
                            </br>
                                <table>
                                    <tr>
                                        <td><label for="grupo">Grupo:</label></td>
                                        <td><select name="grupo" class="form-control" id="select-grupo">
                                    <option value="">Seleccione Grupo</option>
                                        @foreach ($grupos as $grupo)
                                            <option value="{{$grupo->codigo}}">{{$grupo->codigo}} - {{$grupo->nombre}}</option>
                                        @endforeach
                                </select></td>
                                    </tr>
                                    <tr>
                                        <td><label for="Subgrupo">Subgrupo:</label></td>
                                        <td><input type="text" name="subgrupo" class="form-control" value="{{ old('subgrupo') }}"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="Especie">Especie:</label></td>
                                        <td><input type="text" name="especie" class="form-control" value="{{ old('especie') }}"></td>
                                        <td>
                                    </tr>
                                </table>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                            </br>
                            <table>
                                    <tr>
                                        <td><label for="cantidad">Cantidad:</label></td>
                                        <td><input type="number" name="cantidad" class="form-control" value="{{ old('cantidad') }}"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="preciounitario">Precio Unitario:</label></td>
                                        <td><input type="text" name="preciounitario" class="form-control" value="{{ old('preciounitario') }}"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="destino">Destino:</label></td>
                                        <td><select name="destino" class="form-control" id="select-ubicacion ">
                                    <option value="">Seleccione Destino</option>
                                        @foreach ($ubicaciones as $ubicacion)
                                            <option value="{{$ubicacion->dependenciamunicipal}}">{{$ubicacion->codigo}} - {{$ubicacion->dependenciamunicipal}}</option>
                                        @endforeach
                                </select></td>
                                    </tr>
                                </table>
                                 </div>


                        </div>

                            <div class="form-group">
                            </br>
                            &nbsp&nbsp&nbsp&nbsp<label for="descripcionbien">Descripcion del bien:</label>
                            &nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="descripcionbien" class="form-control" value="{{ old('descripcionbien') }}">
                            </div>


                            <div class="form-group">
                            </br>
                            &nbsp&nbsp&nbsp&nbsp<button class="btn btn-success">Registrar Alta</button>
                            </div>
                    </form> 

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Proveedor</th>
                                <th>Orden de compra</th>        
                                <th>Factura</th>
                                <th>Codigo asignado</th>
                                <th>Cantidad</th>
                                <th>Descripcion del bien</th>
                                <th>Precio unitario</th>        
                                <th>Destino</th>
                                <th>Opciones</th>
                        </thead>
                        <tbody>
                            @foreach ($altas as $alta)
                            <tr>
                                <td>{{ $alta->fecha }}</td>
                                <td>{{ $alta->proveedor }}</td>
                                <td>{{ $alta->ordendecompra }}</td>
                                <td>{{ $alta->factura }}</td>
                                <th>{{ $alta->grupo }} x {{ $alta->subgrupo }} x {{ $alta->especie }} x {{ $alta->cantidad }}</th>
                                <td>{{ $alta->cantidad }}</td>
                                <td>{{ $alta->descripcionbien }}</td>
                                <td>{{ $alta->preciounitario }}</td>
                                <td>{{ $alta->destino }}</td>

                                <td>
                                    <a href="/altas/{{ $alta->id }}" class="btn btn-sm primary" title="Editar">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                    @if ($alta->trashed())
                                    <a href="/altas/{{ $alta->id }}/restaurar" class="btn btn-sm-succes" title="Restaurar">
                                        <span class="glyphicon glyphicon-repeat"></span>
                                    </a>
                                    @else
                                    <a href="/altas/{{ $alta->id }}/eliminar" class="btn btn-sm btn-danger" title="Eliminar">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>        


                </div>
            </div>
        </div>
 
@endsection
