<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/min/dropzone.min.css">
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>


<form action="products.edit" method="POST">

    <div class="col-md-8">

        <div class="from-group">    
            {!! Form::label('name','Nombre del Producto') !!}
            
            {!! Form::text('name', null, ['class' => 'form-control']) !!}   
            
        </div>

        <div class="from-group">    
            {!! Form::label('description','Descripción del Producto') !!}
            
            {!! Form::text('description', null, ['class' => 'form-control']) !!}   
            
        </div>

        {{--  <div class="from-group">    
                {!! Form::label('iframe','Video') !!}
                
                {!! Form::text('iframe', null, ['class' => 'form-control']) !!}   
                
        </div>  --}}
        
        <hr>
        <div class="form-group ocultar">
            <div class="dropzone"></div>
        </div>


        <hr>
        <div class="from-group">
            {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}
        </div>
    </div>

</form>

{{-- Eliminar fotos --}}


<div class="row">

@foreach ($product->fotos as  $foto)



    @if($product->fotos->count()>=3)
        <script>
            $(".ocultar").hide();
        </script>
    @else
        <script>
            $(".ocultar").show(1500);
        </script>
    @endif


<form method="POST" action="{{ route('fotos.destroy', $foto) }}" >
    {{ method_field('DELETE') }} {{ csrf_field() }}
    <div class="col-lg-2">
        <button class="btn-sm btn-danger" style="position:absolute"><i class="fa fa-remove"></i>
        </button>
        <img class="img-responsive" src="{{ $foto->url }}" alt="">
    </div>
</form>
@endforeach

</div>


<script>
   var myDropzone=new Dropzone('.dropzone',{
        url: '/fotos/{{ $product->id}}/edit',
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




