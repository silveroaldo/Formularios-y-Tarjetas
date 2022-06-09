<?php
require('../libs/conex.php');
require('../libs/ciudades.lib.php');
require('../libs/personas.lib.php');
$link=conectar();
//print_r($_POST);
//print_r($_GET);

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Personas</title>
     <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
   </head>
   <body>
     <?php
      include('../libs/menu.php');
      ?>
     <div class="container">


     <?php
      if (!($_POST) && !($_GET))
      {
        include('list.php');
      }
        elseif ($_GET['mod']=="new")
        {
          $ciudades=mostrarCiudades($link);
          include('form.php');
        }
        elseif ($_GET['mod']=="edit")
        {
        if ($_GET['id'])
        {
          $ciudades=mostrarCiudades($link);
          $res=mostrarPorId($link,$_GET['id']);
          include('form.php');
        }
        }
        elseif ($_GET['mod']=="delete")
        {
            if ($_GET['id']) {
              borrarPersona($link,$_GET);
              include('list.php');
              // code...
            }

        }elseif ($_POST) {
          // code...
          if ($_POST['id']==-1)
          {
            $salida= agregarPersona($link,$_POST);
            include('list.php');
            //echo $salida;
          } elseif ($_POST['id']!='') {
            $salida= editarPersona($link,$_POST);
            include('list.php');
          }
        }

      ?>
     </div>
<script type="text/javascript" src="/node_modules/bootstrap/dist/js/bootstrap.js">

</script>
   </body>
 </html>
