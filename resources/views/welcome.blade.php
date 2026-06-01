<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Primer Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mi Primer Crud</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Listado de Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">Creación de Productos</a>
        </li>
      
      </ul>
      <form class="d-flex" role="Buscar">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar"/>
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>


<div class="container mt-5">
    <p class="h4 mt-2 mb-4">Listado de productos</p>
    <div class="table-responsive">
        <table class="table table-dark text-center">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $produc)
                <tr>
                    <th scope="row">{{$produc['id']}}</th>
                    <td>{{ucfirst($produc['name'])}}</td>
                    <td>$ {{ number_format($produc['price'], 0, ',', '.') }} COP</td>
                    <td>
                        <button class="btn btn-warning">Editar</button>
                        <button class="btn btn-success">Detalle</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>