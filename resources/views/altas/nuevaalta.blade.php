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
                                    
                            </tr>
                            <td colspan="4"><input type="text" name="descripcionbien" class="form-control" readonly value="{{ $altaesp->descripcionbien }}"></td>
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
                                                <option value="">Seleccio
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
                                  



                                </table>

                            </div>


                        </div>

                    </br>

                        <div class="col-md-6">
                            </br>
                                <table>
                                    <tr>
                                        <td><label for="grupo">Grupo:</label></td>
                                        <td><input type="text" name="grupo" class="form-control" readonly value="{{ $altaesp->grupo_id }}"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Subgrupo:</label></td>
                                        <td><input type="text" name="grupo" class="form-control" readonly value="0{{ $altaesp->subgrupo_id }}"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Especie:</label></td>
                                        <td><input type="text" name="grupo" class="form-control" readonly value="{{ $altaesp->especie_id }}"></td>
                                    </tr>
                                        
                                       <input type="hidden" name="movimiento_id" value="1">

                                    </tr>
                                </table>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                            </br>
                            <table>
                                    








                            </table>
                                 </div>


                        </div>

                            <div class="form-group">
                            </br>
                            &nbsp&nbsp&nbsp&nbsp<button class="btn btn-success">Dar alta</button>
                            </div>
                    </form> 

@endsection

