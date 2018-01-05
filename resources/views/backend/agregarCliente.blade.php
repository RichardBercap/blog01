
@extends("usuario")
@section('title', 'Principal')
@section("content")
    <div class="row">
       <h2>Llene el siguiente formulario</h2>
       <div class="form">
            {{Form::open(['route' => 'clientes.store', 'method' => 'post','files' => true])}}
                <div class="form-group">
                    {{ Form::label("Nombre:")}}
                    {{ Form::text("nombres",null, array_merge(['class' => 'form-control', 'placeholder'=>'Ingresa el nombre completo'])) }}
                </div>
                <div class="form-group">
                   {{ Form::label("Apellido paterno:")}}
                    {{ Form::text("ap",null, array_merge(['class' => 'form-control', 'placeholder'=>'Apellido Paterno'])) }}
                </div>
                <div class="form-group">
                    {{ Form::label("Apellido Materno:")}}
                    {{ Form::text("am",null, array_merge(['class' => 'form-control', 'placeholder'=>'Apellido Materno'])) }}
                 </div>
                <div class="form-group">
                    {{ Form::label("CI:")}}
                    {{ Form::text("ci",null, array_merge(['class' => 'form-control', 'placeholder'=>'# de CI.'])) }}
                </div>
                <div class="form-group">
                    {{ Form::label("Tel/Cel:")}}
                    {{ Form::text("cel",null, array_merge(['class' => 'form-control', 'placeholder'=>'# de Tel/Cel'])) }}
                </div>
                <div class="form-group">
                    {{ Form::label("Dirección:")}}
                    {{ Form::text("direccion",null, array_merge(['class' => 'form-control', 'placeholder'=>'Dirección del cliente'])) }}
                </div>
                <div class="form-group">
                    {{ Form::label("Foto:")}}
                    {{ Form::file('foto', $attributes = [])}}
                </div>
                
                {{ Form::submit("Registrar", ['class' => 'btn btn-primary']) }}                 
            {!! Form::close() !!}
        </div>
        <br><br>
    </div>
    
@endsection