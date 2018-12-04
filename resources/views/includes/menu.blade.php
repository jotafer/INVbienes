


<div class="panel panel-primary">
        <div class="panel-heading">Menú</div>

		<div class="panel-body">
              <div class="panel-body">
                <ul class="nav nav-pills nav-stacked">

            @if (auth()->check())

  						<li @if(request()->is('home')) class="active" @endif><a href="/home" class="list-group-item">Dashboard</a></li>

              <li @if(request()->is('homeesp')) class="active" @endif><a href="/homeesp" class="list-group-item">Dashboard Esp.</a></li>


              <li @if(request()->is('nuevaalta')) class="active" @endif><a href="/altas/altaespecie" class="list-group-item">Nueva Alta de especie</a></li>

              <li role="presentation" class="dropdown">
              <a class"dropdown toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"  aria-expanded="false">
              Alta de bien<span class="caret"></span>
              </a>
                  <ul class="dropdown-menu">
                      <li><a href="/altas/altabien">Con 1 existencia</a></li>
                      <li><a href="/altavarias">Con varias existencias</a></li>
                  </ul>
              </li>

  						<li @if(request()->is('verbienes')) class="active" @endif><a href="/verbienes" class="list-group-item">Ver bienes muebles</a></li>

              <li @if(request()->is('generarplaqueta')) class="active" @endif><a href="/generarplaqueta" class="list-group-item">Generar plaqueta inventario</a></li>
              
              <li role="presentation" class="dropdown">
              <a class"dropdown toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"  aria-expanded="false">
              Movimiento bienes<span class="caret"></span>
              </a>
                  <ul class="dropdown-menu">
                      <li><a href="/bajas/bajabien">Baja</a></li>
                      <li><a href="/traslados/trasladobien">Traslado</a></li>
                  </ul>
              </li>


              @if (auth()->user()->role == 0)
              <li role="presentation" class="dropdown">
              <a class"dropdown toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"  aria-expanded="false">
              Administracion<span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
              <li><a href="/usuarios">Usuarios</a></li>
              <li><a href="/grupos">Grupos</a></li>
              <li><a href="/subgrupos">Subgrupos</a></li>
              <li><a href="/especies">Especies</a></li>
              <li><a href="/ubicaciones">Ubicaciones</a></li>
            </ul>
          </li>
          @endif


 	 					@else

 	 					

 	 					@endif


                </div>
    </div>
</div>