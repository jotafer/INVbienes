@extends('layouts.app')

@section('content')


            <div class="panel panel-primary">
                <div class="panel-heading">Formulario de Traslado de bienes</div>

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
                                    
                                    </tr>
                                        <td colspan="4"><input type="text" name="descripcionbien" class="form-control" readonly value="{{ $alta->descripcionbien }}"></td>
                                    <tr>
                                    <tr>
                                        <td></td>
                                        <td></td>

                                    </tr>
                                    <tr>
                                        <td><label for="fecha">Fecha:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label></td>
                                        <td><input class="form-control" type="date" placeholder="Date" name="fecha"></td>
                                    </tr>
                                    <tr>
                                         <td><label for="estado_conservacion">Estado conservacion:</label></td>
                                        <td><select name="estado_conservacion" class="form-control">
                                                <option value="">Seleccione Estado</option>
                                                <option value="0">Bueno</option>
                                                <option value="1">Regular</option>
                                                <option value="2">Malo</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                        </div>

                        <div class="row">
                        </br>
                            <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td><label for="proveedor">Proveedor:</label></td>
                                        <td><input type="text" name="proveedor" class="form-control" readonly value="{{ $alta->proveedor }}"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="ordendecompra">Orden de Compra:</label></td>
                                        <td><input type="text" name="ordendecompra" class="form-control" readonly value="{{ $alta->ordendecompra }}"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="proveedor">Factura:</label></td>
                                        <td><input type="text" name="factura" class="form-control" readonly value="{{ $alta->factura }}"></td>
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
                                        <td><input type="text" name="grupo" class="form-control" readonly value="{{ $alta->grupo_id }}"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Subgrupo:</label></td>
                                        <td><input type="text" name="grupo" class="form-control" readonly value="0{{ $alta->subgrupo_id }}"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Especie:</label></td>
                                        <td><input type="text" name="grupo" class="form-control" readonly value="{{ $alta->especie }}"></td>
                                    </tr>
                                        <td><label for="numero">Numero:</label></td>
                                        <td><input type="number" name="numero" class="form-control" readonly value="{{ $alta->numero }}"></td>

                                    <tr>
                                       <input type="hidden" name="movimiento_id" value="3">

                                    </tr>
                                </table>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                            </br>
                            <table>
                                    <tr>
                                        <td><label for="cantidad">Cantidad:</label></td>
                                        <td><input type="number" name="cantidad" class="form-control" readonly value="{{ $alta->cantidad }}"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="preciounitario">Precio Unitario:</label></td>
                                        <td><input type="text" name="preciounitario" class="form-control" readonly value="{{ $alta->preciounitario }}"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="destino">Destino:</label></td>
                                        <td><select name="ubicacion_id" class="form-control" id="select-ubicacion">
                                    <option value="">Seleccione Destino</option>
                                       @foreach ($ubicaciones as $ubicacion)
                                            <option value="{{$ubicacion->id}}">{{$ubicacion->id}} - {{$ubicacion->dependenciamunicipal}}</option>
                                        @endforeach
                                </select></td>
                                    </tr>
                                </table>
                                 </div>


                        </div>

                            <div class="form-group">
                            </br>
                            &nbsp&nbsp&nbsp&nbsp<button class="btn btn-success">Trasladar</button>
                            </div>
                    </form> 

@endsection

