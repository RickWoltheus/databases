<?php
 $link = mysqli_connect("localhost", "root", "", "school");
$input = mysqli_real_escape_string($link, $_POST['id']);
$cijfer = mysqli_real_escape_string($link, $_POST['cijfer']);
$sql = "UPDATE leerlingen SET cijfer=$cijfer WHERE id=$input";



if ($link->query($sql) === TRUE) {
    echo "Record changed successfully";
} else {
    echo "Error changing record: " . $conn->error;
}

$link->close();
?>
