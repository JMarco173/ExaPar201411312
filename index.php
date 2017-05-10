<!DOCTYPE html>
<html>
<head>
	<title>Examen Parcial
	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
  <div align="center" margin="auto" border="1px">
  	<img src="images/CabeceraGH.JPG" width="1000px">
  </div>
  <div align="center" margin="auto" border="1px">
  <table align="center" margin="center" width="1000px" >
   <?php
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "b74ba3320e82ec";
  $password = "2d194843";
  $dbname = "ad_bb6ddb2f34daf52";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * from servicios";
  $result = $conn->query($sql) ?>;
      
  <td colspan="2"> For data scientist </td>
  <td colspan="2"> For IT profesional </td>
  <?php
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {?>
      <tr> 
      <td><img align="center" src="<?php echo $row['imagen_servicio']?>"/></td>
      <td><?php echo $row['nombre_servicio']?><br><?php echo $row['descripcion_servicio']?></td>
      <?php $row = $result->fetch_assoc() ?>       
      <td><img align="center" src="<?php echo $row['imagen_servicio']?>"/></td>
      <td><?php echo $row['nombre_servicio']?><br><?php echo $row['descripcion_servicio']?></td>
  	  </tr>
  	}
   <?php }}
   else {
      echo "0 results";
  }
  $conn->close();
 ?> 
 </table>
 <div>
 <div align="center" margin="auto" border="1px">
  	<img src="images/PieSAS.JPG" width="978">
  </div>
 </body>
</html>
