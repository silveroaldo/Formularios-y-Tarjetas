<?php
if ($res){
$data=mysqli_fetch_array($res);
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 </head>
 <body>
   <center>
    <h3>Personas</h3>
    <form class="" action="index.php" method="post">
      <input type="hidden" class="form-label" name="id" value="<?php if ($data['id']){ echo $data['id'];  } else { echo -1;} ?>">  <br>

      <label for="cin"><strong>Cedula Numero</strong></label><br>
      <input type="text" name="cin" value="<?php if ($data['cin']){ echo $data['cin'];} ?>"><br>

      <label for="apellido"><strong>Apellido</strong></label><br>
      <input type="text" name="apellido" value="<?php if ($data['apellido']){ echo $data['apellido'];} ?>"><br>

      <label for="nombre"><strong>Nombre</strong></label><br>
      <input type="text" name="nombre" value="<?php if ($data['nombre']){ echo $data['nombre'];} ?>"><br>

      <label for="fenac"><strong>F. de Nacimiento</strong></label><br>
      <input type="text" name="fenac" value="<?php if ($data['fenac']){ echo $data['fenac'];} ?>"><br>

      <label for="email"><Strong>Emeil</Strong></label><br>
      <input type="text" name="email" value="<?php if ($data['email']){ echo $data['email'];} ?>"><br>

      <label for="ciudad_id"><strong>Cuidad</strong></label><br>
      <input type="text" name="ciudad_id" value="<?php if ($data['ciudad_id']){ echo $data['ciudad_id'];} ?>"><br>
      <select class="" name="ciudad_id">
        <?php
        while ($d=mysqli_fetch_array($ciudades))
        {
          $sel='';
          if ($data['ciudad_id'] & ($d['id']==$data['ciudad_id']) )
            { $sel="selected='true'";}
          echo "<option  value='".$d['id']."'".$sel.">".$d['ciudad']."</option>";
        }
        ?>
      </select>
      <button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-send" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <desc>Download more icon variants from https://tabler-icons.io/i/send</desc>
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <line x1="10" y1="14" x2="21" y2="3"></line>
   <path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5"></path>
</svg></button><button class="btn btn-warning"><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <desc>Download more icon variants from https://tabler-icons.io/i/arrow-back-up</desc>
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1"></path>
</svg></a></button>
    </form>

    </center>

 </body>
 </html>
