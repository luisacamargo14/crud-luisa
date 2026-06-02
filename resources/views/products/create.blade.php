<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Primer Crud | Creación Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .pagination .page-link {
    background-color: #111827; /* gris oscuro */
    color: #e5e7eb;           /* texto claro */
    border: 1px solid #374151;
}

.pagination .page-item.disabled .page-link {
    background-color: #0b0f19;
    color: #6b7280;
}

.pagination .page-item.active .page-link {
    background-color: #626468;
    border-color: #626468;
    color: white;
}

.pagination .page-link:hover {
    background-color: #1f2937;
    color: white;
}
    </style>
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
          <a class="nav-link " aria-current="page" href="{{route('products.index')}}">Listado de Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('products.create')}}">Creación de Productos</a>
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
    <p class="h4 mt-2 mb-4">Creación de productos</p>

    <div class="card">
        <div class="card-body">
           <form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Descripción</label>
        <textarea name="description" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Precio</label>
        <input type="number" name="price" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">
        Crear producto
    </button>
</form>
        </div>
    </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>