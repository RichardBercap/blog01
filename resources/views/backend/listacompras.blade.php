
@extends("usuario")
@section('title', 'lista de compras rapidas')
@section("content")
    <div class="wow">
		<table class="table table-striped">
            <caption><h2>Ventas pequeñas realizadas</h2> </caption>
            <thead>
                    <tr>
                        <th>#</th>
                        <th>Titulo</th>
                        <th>Detalle</th>
                        <th>Total</th>
                        <th>Fecha</th>
                    </tr>
            </thead>
            <tbody>
                
                
                @foreach($compras as $compra)
                   <tr>
                     <td>{{$compra->id}}</td>
                     <td>{{$compra->titulo}}</td>
                     <td>{{$compra->detalle}}</td>
                     <td>{{$compra->total}}</td>
                     <td>{{$compra->fecha}}</td>
                    </tr> 
                @endforeach 
                

            </tbody>
        </table>
        <div class="row col-xs-5">
            <a href="{{ url('/comprarapida/create') }}" class="btn btn-success col-xs-12">Nuevo</a>
        </div>
     
 <br>      
    </div>		
    {!! $compras->render() !!}
@endsection