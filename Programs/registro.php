<?php
  if(!empty ($nombre=$_POST['name']))
  {
    echo'Registro concluido exitosamente,'.$nombre;
    echo'<br/><a href="login.php">Ingresar</a>';
  }
  else
  {
    echo'Algo falló con el registro, no se concluyó';
  }
  ?>
