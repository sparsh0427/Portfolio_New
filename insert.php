<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "test");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$Email = mysqli_real_escape_string($link, $_REQUEST['Email']);
$Message = mysqli_real_escape_string($link, $_REQUEST['Message']);
 
// Attempt insert query execution
$sql = "INSERT INTO forms(NAME,EMAIL,MESSAGE) VALUES ('$Name', '$Email', '$Message')";
if(mysqli_query($link, $sql)){
    echo "Thanks for your Time.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>