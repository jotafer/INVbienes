@extends('layouts.app')

@section('content')


            <div class="panel panel-primary">
                <div class="panel-heading">Crear nuevo subgrupo"</div>

                <div class="panel-body">
                    <form action="">   
                        <div class="form-group">


                                <label for="grupo_id">Grupo</label>
                                <select name="grupo_id" class="form-control">
                                    @foreach($grupos as grupos)
                                        <option value="{{$grupo->id}}">{{$grupo->nombre}}</option>
                                    @endforeach
                                </select>    
                        </div>
                    </form>
                </div>
            </div>
        </div>
 
@endsection
    