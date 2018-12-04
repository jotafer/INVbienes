@extends('layouts.app')

@section('content')


            <div class="panel panel-primary">
                <div class="panel-heading">Inventariar bien mueble</div>

                <div class="panel-body">
                    <form action="">   
                        <div class="form-group">
                            <label for="grupo_id">Grupo</label>
                            <select name="grupo_id" class="form-control">
                                @foreach ($grupos as $grupo)
                                    <option value="{{$grupo->id}}">{{$grupo->nombre}}</option>
                                @endforeach
                            </select>  
                        </div>

                        <div class="form-group">
                            <label for="subgrupo_id">Subgrupo</label>
                            <select name="subgrupo_id" class="form-control">
                            
                            </select>  
                        </div>
                 
                        <div class="form-group">
                            <label for="especie_id">Especie</label>
                            <select name="especie_id" class="form-control">
                              
                            </select>  
                        </div>
                      

                        <div class="form-group">
                            <label for="fechamovimiento">Cantidad</label>
                            <input class="form-control" type="number" value="1" name="cantidad">
                        </div>

                        <div class="form-group">    
                            <label for="description">Descripcion del bien</label>
                            <textarea name="descripcion" rows="3" class="form-control"></textarea>     
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary">Inventariar bien</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
 
@endsection
