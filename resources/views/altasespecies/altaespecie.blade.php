@extends('layouts.app')

@section('content')



            <div class="panel panel-primary">
                <div class="panel-heading">Formulario de Alta de Especie</div>

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
                                        <td><label>Especie:</label></td>
                                        <td>
                                            <select name="especie" class="form-control" id="select-especie">
                                                <option value="">Seleccione Especie</option>
                                            </select>
                                        <td>
                                    </tr>
    
                                </table>
                        </div>


                            <div class="form-group">
                            </br>
                            &nbsp&nbsp&nbsp&nbsp<label for="descripcionbien">Descripcion del grupo de especies:</label>
                            &nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="descripcionespecie" class="form-control" value="{{ old('descripcionespecie') }}">
                            </div>


                            <div class="form-group">
                            </br>
                            &nbsp&nbsp&nbsp&nbsp<button class="btn btn-success">Registrar Alta</button>
                            </div>
                    </form>


                
 
@endsection

@section('scripts')

    <script src="/js/users/grupos/index.js"></script>

@endsection
