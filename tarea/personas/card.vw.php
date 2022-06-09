<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  
</head>
<body>
<div class="card" style="width: 100;">
  <div class="card-header">
    <?php echo $data['apellido'].", ".$data['nombre']; ?>
  </div>
  <div class="card-body">
    <div class="row">
    <div class="col">
      <p class="card-text">CI Nro.:<?php echo $data['cin']; ?> </p>
      <p class="">Edad: <?php echo edadPersona($data['fenac']); ?></p>
      <p class="card-text">Localidad:<?php echo nombreCiudad($link,$data['ciudad_id']); ?> </p>
    </div>
    <div class="col">
      <a href="<?php echo "index.php?mod=edit&id=".$data["id"]; ?>" class="btn btn-warning">Editar</a>
      <a href="<?php echo "index.php?mod=delecte&id=".$data["id"]; ?>" class="btn btn-danger">Borrar</a>
    </div>
    </div>
  </div>
</div>

</body>
</html>

