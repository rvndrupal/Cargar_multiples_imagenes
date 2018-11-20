
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/min/dropzone.min.css">

<div class="from-group">    
    {!! Form::label('name','Nombre del Producto') !!}
    
    {!! Form::text('name', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('description','Descripción del Producto') !!}
    
    {!! Form::text('description', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('iframe','Video') !!}
    
    {!! Form::text('iframe', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('category_id','Categorías') !!}
    
    {!! Form::select('category_id', $categories , null , ['class' => 'form-control']) !!}   <!--Se obtiene la categoria-->
    
</div>

<hr>
<div class="form-group">
    <div class="dropzone"></div>
</div>



<div class="from-group">    
        
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}   
    
</div>


<script>
    var myDropzone=new Dropzone('.dropzone',{
         url: '/fotos/add',
         acceptedFiles: 'image/jpeg,image/png,image/jpg',  
         maxFilesize: 2,
         paramName: 'foto',
         maxFiles:3,
        // addRemoveLinks: true,
 
         headers:{
             'X-CSRF-TOKEN':'{{ csrf_token() }}'
         },
        
         dictDefaultMessage:"Arrastra la Fotos  ó Presiona Aqui",
     });
 
   
     Dropzone.autoDiscover=false;
   </script>
 