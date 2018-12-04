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
                            
                

                        <div class="col-md-6">
                            </br>
                                <table>
                                    <tr>
                                        <td><label for="grupo">Grupo:</label></td>
                                        <td>
                                            <select name="grupo_id" class="form-control" id="select-grupo">
                                                <option value="">Seleccione Grupo</option>
                                                @foreach ($grupos as $grupo)
                                                        <option value="{{$grupo->codigo}}">{{$grupo->codigo}} - {{$grupo->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Subgrupo:</label></td>
                                        <td>
                                            <select name="subgrupo_id" class="form-control" id="select-subgrupo">
                                                <option value="">Seleccione Subgrupo</option>
                                            </select>
                                        </td>
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
                                        <td><select name="ubicacion_id" class="form-control" id="select-ubicacion">
                                    <option value="">Seleccione Destino</option>
                                        @foreach ($ubicaciones as $ubicacion)
                                            <option value="{{$ubicacion->id}}">{{$ubicacion->codigo}} - {{$ubicacion->dependenciamunicipal}}</option>
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

                    <table class="table table-bordered" style="font-size:14px">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Orden de compra</th>        
                                <th>Factura</th>
                                <th>Codigo asignado</th>
                                <th>Cantidad</th>
                                <th>Descripcion bien</th>
                                <th>Precio unitario</th>        
                                <th>Destino</th>
                                <th>Modif.</th>
                                <th>Movimiento</th>
                        </thead>
                        <tbody>
                            @foreach ($altas as $alta)
                            <tr>
                                <td>{{ $alta->fecha }}</td>
                                <td>{{ $alta->ordendecompra }}</td>
                                <td>{{ $alta->factura }}</td>
                                <th>{{ $alta->grupo_id }}x0{{ $alta->subgrupo_id }}x{{ $alta->especie }}x0{{ $alta->cantidad }}x0{{ $alta->ubicacion_id }}</th>
                                <td>{{ $alta->cantidad }}</td>
                                <td>{{ $alta->descripcionbien }}</td>
                                <td>{{ $alta->preciounitario }}</td>
                                <td>
                                    @if($alta->ubicacion_id == 1)<p>Gabinete de Alcaldía</p> @endif    
                                    @if($alta->ubicacion_id == 2)<p>Extensión Cultural y Turismo</p> @endif
                                    @if($alta->ubicacion_id == 3)<p>Secretaria Municipal</p> @endif
                                    @if($alta->ubicacion_id == 4)<p>Oficina de partes y archivos</p> @endif
                                    @if($alta->ubicacion_id == 5)<p>Ubicacion de prueba 5 </p> @endif
                                    @if($alta->ubicacion_id == 6)<p>Secretaría Comunal de Planificación y Coordinación </p> @endif    
                                    @if($alta->ubicacion_id == 7)<p>Extensión Cultural y Turismo 9</p> @endif
                                    @if($alta->ubicacion_id == 8)<p>Secretaria Municipal 8</p> @endif
                                    @if($alta->ubicacion_id == 9)<p>Oficina de partes y archivos 9</p> @endif
                                    @if($alta->ubicacion_id == 10)<p>Ubicacion de prueba 10</p> @endif
                                    @if($alta->ubicacion_id == 11)<p>Gabinete de Alcaldía</p> @endif    
                                    @if($alta->ubicacion_id == 12)<p>Extensión Cultural y Turismo</p> @endif
                                    @if($alta->ubicacion_id == 13)<p>Secretaria Municipal</p> @endif
                                    @if($alta->ubicacion_id == 14)<p>Oficina de partes y archivos</p> @endif
                                    @if($alta->ubicacion_id == 15)<p>Ubicacion de prueba 5 </p> @endif
                                    @if($alta->ubicacion_id == 16)<p>Gabinete de Alcaldía 6 </p> @endif    
                                    @if($alta->ubicacion_id == 17)<p>Extensión Cultural y Turismo 9</p> @endif
                                    @if($alta->ubicacion_id == 18)<p>Secretaria Municipal 8</p> @endif
                                    @if($alta->ubicacion_id == 19)<p>Oficina de partes y archivos 9</p> @endif
                                    @if($alta->ubicacion_id == 20)<p>Ubicacion de prueba 10</p> @endif
                                </td>

                                <td>
                                    <a href="/altas/{{ $alta->id }}" class="btn btn-sm primary" title="Editar">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                    @if ($alta->trashed())
                                    <a href="/altas/{{ $alta->id }}/restaurar" class="btn btn-xs succes" title="Restaurar">
                                        <span class="glyphicon glyphicon-repeat"></span>
                                    </a>
                                    @else
                                    <a href="/altas/{{ $alta->id }}/eliminar" class="btn btn-xs btn-danger" title="Eliminar">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </a>
                                    @endif
                                </td>

                                <td>
                                    <a href="/altas/{{ $alta->id }}/traslado" class="btn btn-warning btn-xs" style="font-size:14px; width:76px">Traslado</a>

                                    <a href="/altas/{{ $alta->id }}/baja" class="btn btn-danger btn-xs" style="font-size:14px; width:76px">Baja</a>
                                </td>


                            </tr>
                            @endforeach
                        </tbody>        


                </div>
            </div>
        </div>
 
@endsection

@section('scripts') 
    <script src="/js/users/grupos/index.js"></script>
@endsection
