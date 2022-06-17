<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  </head>
  <body>

    <nav class="navbar is-primary">
        <!-- navbar brand, navbar menu... -->
        <div class="buttons ml-6">
            <a href="addMenu" class="button is-success">Tambah Data</a>
          </div>
      </nav>

     @if ($posts -> count() >= 1)
     @include('assets.viewCard')
     @endif
  </body>
</html>
