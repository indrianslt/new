<?php 
    include "database.php";
   $data = mysqli_query($conn, "SELECT* FROM klasemen"); 
   $number = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border ='1'>
  <tr>
    <th>No</th>
    <th>Klub</th>
    <th>Ma</th>
    <th>Me</th>
    <th>S</th>
    <th>K</th>
    <th>GM</th>
    <th>GK</th>
    <th>Point</th>
  </tr>
  <?php 
  while($klasemen = mysqli_fetch_array($data)){
    echo "
        <tr>
            <td>$number</td>
            <td>$klasemen[nama_klub]</td>
            <td></td>
            <td></td>
        </tr>
    ";

    $number++;
  }
  ?>
</table>
</body>
</html>