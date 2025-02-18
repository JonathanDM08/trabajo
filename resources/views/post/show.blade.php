<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show_Laravel 11</title>
</head>
<body>

    <h1>Aqui mostrara el post  <?=$post?></h1>

    @if (true)
    <p> - > Contenido de prueba </p>
    
    @else 
    <p> No existe ningun contenido </p>
    @endif
</body>
</html>