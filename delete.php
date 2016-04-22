<?php
 $link = mysqli_connect("localhost", "root", "", "school");

 // Check connection
if ($link->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$delete = mysqli_real_escape_string($link, $_POST['id']);
$sql = "DELETE FROM leerlingen WHERE id=$delete";

if ($link->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $link->error;
}

$link->close();
?>
