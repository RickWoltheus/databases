<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "school");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$first_name = mysqli_real_escape_string($link, $_POST['firstname']);
$last_name = mysqli_real_escape_string($link, $_POST['lastname']);
$email_address = mysqli_real_escape_string($link, $_POST['email']);
$cijfer = mysqli_real_escape_string($link, $_POST['cijfer']);
$mentor = mysqli_real_escape_string($link, $_POST['mentor']);
$groep = mysqli_real_escape_string($link, $_POST['groep']);

// Attempt insert query execution
$sql = "INSERT INTO leerlingen (voornaam, achternaam, email, cijfer, mentor, groep) VALUES ('$first_name', '$last_name', '$email_address', '$cijfer' , '$mentor' , '$groep')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
