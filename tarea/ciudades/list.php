<?php
$res=mostrarCiudades($link);
 ?>
 <h3>ciudades</h3>     
 <tr>
       <th colspan="2"><a href="index.php?mod=new">Nuevo</a></th>
  </tr>
 <table class="table-primary">
 <thead>

   </thead>
   <tbody>

     <?php
     while ($data=mysqli_fetch_array($res))
     {
      include 'card2.vw.php';
       //echo "<tr><td>".$data[0]."</td><td>".$data['ciudad']."</td><td><a href='index.php?mod=edit&id=".$data["id"]."'>editar</a></td><td><a href='index.php?mod=delete&id=".$data["id"]."'>borrar</a></td></tr>";
     }
      ?>
   <tbody>

   </tbody>
 </table>
