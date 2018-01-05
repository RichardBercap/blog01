
@extends("usuario")
@section('title', 'Principal')
@section("content")
    <div class="row">
       <h2>Nueva Compra Rápida</h2>
       <div class="form">
            {{Form::open(['route' => 'comprarapida.store', 'method' => 'post'])}}
                <div class="form-group">
                    {{ Form::label("Título:")}}
                    {{ Form::text("titulo",null, array_merge(['class' => 'form-control', 'placeholder'=>'Ingresa el título'])) }}
                </div>
                <div class="form-group">
                    {{ Form::label("Detalle:")}}
                    {{ Form::textArea("detalle",null, array_merge(['class' => 'form-control', 'placeholder'=>'Detalle de la compra'])) }}
                </div>
                <div class="form-group">
                    {{ Form::label("Fecha de la compra:")}}
                    {{ Form::date('fecha',\Carbon\Carbon::now())}}
                 </div>
                <div class="form-group">
                    {{ Form::label("Total:")}}
                    {{ Form::text("total",null, array_merge(['class' => 'form-control', 'placeholder'=>'Total de la compra'])) }}
                </div>
                {{ Form::submit("Registrar", ['class' => 'btn btn-primary']) }}                 
            {!! Form::close() !!}
        </div>
    </div>
@endsection