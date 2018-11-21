<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<h1>Categorias</h1>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripción</th>
       
      </tr>
    </thead>
    <tbody>
    @foreach ($categorias as $c)
      <tr>
        <th scope="row">{{ $c->id }}</th>
        <td>{{ $c->nombre }}</td>
        <td>{{ $c->descripcion }}</td>
      </tr>

      @endforeach
     
    </tbody>
  </table>

  <h1>Total de Categorias  {{  $categorias->count() }}</h1>
  
  