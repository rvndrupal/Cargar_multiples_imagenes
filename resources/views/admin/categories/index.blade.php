@extends('admin.base')

@section('content')

<h1>
    Categorias
    <small>Todas las Categorias</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('categories.index') }}"><i class="fa fa-dashboard"></i> Listado de Categorias</a></li>
    <li class="active">Categoria</li>
  </ol>
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Etiquetas
                    @can('categories.create')
                    <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary pull-right">Nuevo</a>
                    @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="1px">ID</th>
                                <th width="1px">Nombre</th>
                                <th width="1px">Descripción</th>                                
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($categories as $categorie )
                            <tr>
                                <td>{{ $categorie->id }}</td>
                                <td>{{ $categorie->nombre }}</td>
                                <td>{{ $categorie->descripcion }}</td>
                                
                                <td width="1px">
                                @can('categories.show')
                                    <a href="{{ route('categories.show', $categorie->id) }}" class="btn btn-sm btn-default">Ver</a>
                                @endcan
                                </td>
                                <td width="1px">
                                @can('categories.edit')
                                    <a href="{{ route('categories.edit', $categorie->id) }}" class="btn btn-sm btn-default">Editar</a>
                                @endcan
                                </td>
                                <td width="1px">
                                @can('categories.destroy')
                                    
                                {!! Form::open(['route'=>['categories.destroy', $categorie->id],
                                'method'=>'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                
                                {!! Form::close() !!}                               
                                    
                                @endcan
                                </td>

                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>

                    {{ $categories->render() }}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection