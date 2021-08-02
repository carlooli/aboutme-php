<html>
<body>
<title>About Me</title>
<style>
body {
  background-image: url('https://i.pinimg.com/originals/be/2a/94/be2a940c4ac312bf5abc0aa9677749de.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

header {
  display: block;
  padding-top: 5px;
}
/* table css */
table {
  width:40%;
}
table, td {
  border: 1px solid black;
  border-collapse: collapse;
}
td{
  padding: 15px;
  text-align: center;
  
}
.center {
  margin-left: auto;
  margin-right: auto;
}
</style>

<?php
    $name="Carlo F. Oliveros";
    $add="Las Pinas City, Metro Manila. Philippines";
    $age="24";
    $relig="Catholic";
    $school="University of Makati";
    $food="Chicken Wings";
    $color="Green";
?>
<header>
  <center><h1><?php echo $name ?></h1>
  <p><?php echo $add ?></p></center>
  <hr style="height:2px;border-width:0;color:gray;background-color:gray"> 
</header>
<br>
<table class="center">
  <tr>
    <td style="font-weight: bold">Age</td>
    <td><?php echo $age ?></td>
  </tr>
  <tr>
    <td style="font-weight: bold">Religion</td>
    <td><?php echo $relig ?></td>
  </tr>
  <tr>
    <td style="font-weight: bold">School</td>
    <td><?php echo $school ?></td>
  </tr>
  <tr>
    <td style="font-weight: bold">Favorite Food</td>
    <td><?php echo $food ?></td>
  </tr>
  <tr>
    <td style="font-weight: bold">Favorite Color</td>
    <td><?php echo $color ?></td>
  </tr>
</table>

</body>
</html>