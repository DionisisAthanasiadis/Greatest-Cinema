<?php
$conn = mysqli_connect("localhost", "root", "", "prototype1");
 
// Έλεγχος σύνδεσης
if($conn === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

<!-- The first line creates a connection to the MySQL database server 
running on the local machine. The first argument is the name of the server
("localhost"), the second argument is the username to access the database 
("root"), the third argument is the password for the user 
(an empty string in this case), and the fourth argument is the name of 
the database to connect to ("prototype1").

The if statement checks whether the connection was successful. 
If the $conn variable is false, then the mysqli_connect() 
function failed to connect to the database, and the die() 
function will be called to terminate the script with an error 
message that includes the reason for the failure 
(mysqli_connect_error()). -->

