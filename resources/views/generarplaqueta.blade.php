@extends('layouts.app')

@section('content')


<div class="panel panel-primary">

        <div class="panel-heading">Dashboard</div>

        <div class="panel-body">
                    
            <div class="panel panel-success">
                <div class="panel-heading">

                        <h3 class="panel-title">Especies en Alta</h3>  
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Inventario</th>
                                <th>Descripción del bien</th>
                                <th>Movimiento</th>
                            </tr>
                        </thead>
                        <tbody id="dashboard_especies_alta"></tbody>
                            @foreach ($altaesps as $altaesp)
                            <tr>
                                <th>

            <a href="/altaesp/{{ $altaesp->id }}">

            @if($altaesp->subgrupo_id == 3) <p>{{ $altaesp->grupo_id }} . 01 . {{ $altaesp->especie_id }}</p> 

            @elseif($altaesp->subgrupo_id == 4) <p>{{ $altaesp->grupo_id }} . 02 . {{ $altaesp->especie_id }}</p> 

            @elseif($altaesp->subgrupo_id == 5) <p>{{ $altaesp->grupo_id }} . 03 . {{ $altaesp->especie_id }}</p> 

            @elseif($altaesp->subgrupo_id == 6) <p>{{ $altaesp->grupo_id }} . 01 . {{ $altaesp->especie_id }}</p>

            @elseif($altaesp->subgrupo_id == 7) <p>{{ $altaesp->grupo_id }} . 02 . {{ $altaesp->especie_id }}</p>  

            @else {{ $altaesp->grupo_id }} . 0{{ $altaesp->subgrupo_id }} . {{ $altaesp->especie_id }} @endif

                                    </a>
                                </th>
                                <th>{{ $altaesp->descripcionespecie }}</th>
                                <th>
                                    <a href="/altas/{{$altaesp->id}}/nuevaalta" class="btn btn-primary btn-sm">
                                    <span class="glyphicon glyphicon-plus"></span> Nueva alta</button>            

                                </th>

                            </tr>
                            @endforeach
                    </table>

                   

                </div>
            </div>

           

</div>

    
@endsection