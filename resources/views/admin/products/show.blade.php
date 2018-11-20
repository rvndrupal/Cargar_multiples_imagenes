@extends('admin.base')

@section('content')


<h1>
    Productos
    <small>Producto</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('products.index') }}"><i class="fa fa-dashboard"></i> Listado de Productos</a></li>
    <li class="active">Producto</li>
  </ol>

{{--  <div class="container">  --}}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Producto
                </div>

                <div class="panel-body">
                <p> <strong>Nombre</strong> {{ $product->name }}</p>
                <p> <strong>Descripción</strong> {{ $product->description }}</p>
                <p> <strong>Categoria</strong> {{ $product->category->nombre }}</p>
                <p> <strong>Descripción</strong> {{ $product->category->descripcion }}</p>

                @if($product->fotos->count()===1)
                
                <div class="col-md-8">
                <img class="imagen0" src=" {{ $product->fotos->first()->url }}">
                </div>
            
            @elseif($product->fotos->count() == 2)
                <?php
               $x=0;
                ?>
              
                @foreach($product->fotos as $foto)
                    <?php $x+=1; ?> 
                    <img class="dos_{{ $x }}" src="{{ $foto->url }}" alt="">
                   
                    
                @endforeach
            @elseif($product->fotos->count() == 3)
            <?php
            $x=0;
            ?>
            
            @foreach($product->fotos as $foto)
                <?php $x+=1; ?> 
                <img class="tres_{{ $x }}" src="{{ $foto->url }}" alt="">
                
                
            @endforeach                
            @endif

            {{-- video --}}
            @if($product->iframe)
            <div class="video">
                {!! $product->iframe !!}
            </div>
            @endif



                </div>
            </div>
        </div>
    </div>
{{--  </div>     --}}
@endsection 