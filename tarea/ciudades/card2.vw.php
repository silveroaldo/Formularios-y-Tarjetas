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
    <div class="card-body">
      <div class="row">
      <div class="col">
        <p class="card-text">Id: <?php echo $data['id']; ?> </p>
        <p class="card-text">Ciudad: <?php if ($data['ciudad']){ echo $data['ciudad'];} ?> </p>
      </div>
      <div class="col">
        <a href="<?php echo "index.php?mod=edit&id=".$data["id"]; ?>" class="btn btn-warning">Editar</a>
        <a href="<?php echo "index.php?mod=delete&id=".$data["id"]; ?>" class="btn btn-danger">Borrar</a>
      </div>
      </div>
    </div>
  </div>
</body>
</html>

