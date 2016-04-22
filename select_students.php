<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .negatief {
        color: red;
      }
    </style>
  </head>
  <body>
<?php
const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'school';
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($mysqli->connect_errno) {
    echo 'error:' . $mysqli->connect_error;
} else {
    echo 'connection made';
}

$sql = "SELECT * FROM leerlingen";

$result = $mysqli->query($sql);

while($row = $result->fetch_assoc()){
  if ($row['cijfer'] > 5.5 || $row['cijfer'] == 5.5) {

   echo "<fieldset><br>" . "voornaam: " . $row['voornaam'] . "<br>";
   echo "achternaam: " . $row['achternaam'] . "<br>";
   echo "email: " . $row['email'] . "<br>";
   echo "cijfer: " . $row['cijfer'] . "<br>";
   echo "mentor: " . $row['mentor'] . "<br>";
   echo "groep: " . $row['groep'] . "<br>";
   echo "id: " . $row['id'] . "<br></fieldset>";

 }

 if ($row['cijfer'] < 5.5) {
  echo "<fieldset><br>" . '<div class="negatief"'. "voornaam:" . $row['voornaam'] . "<br>";
  echo "achternaam: " . $row['achternaam'] . "<br>";
  echo "email: " . $row['email'] . "<br>";
  echo "cijfer: " . $row['cijfer'] . "<br>";
  echo "mentor: " . $row['mentor'] . "<br>";
  echo "groep: " . $row['groep'] . "<br>";
  echo "id: " . $row['id'] . "<br>" . '</div></fieldset>';

}

}?>
<a href="insert_student.html">maak nieuwe leerling aan</a><br>
<a href="delete.html">verwijder een leerling</a><br>
<a href="replace.html">verander cijfer</a><br>
</body>
</html>
