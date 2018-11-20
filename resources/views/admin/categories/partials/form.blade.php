<div class="from-group">    
    {!! Form::label('nombre','Nombre de la Categoría') !!}
    
    {!! Form::text('nombre', null, ['class' => 'form-control', 'id'=>'name']) !!}   
    
</div>

<div class="from-group">    
        {!! Form::label('descripcion','Descripción de la Categoria') !!}
        
        {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}   
    
    </div>


<hr>
<div class="from-group">    
        
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}   
    
</div>


