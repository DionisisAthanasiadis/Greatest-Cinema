<?php
include 'db.php';

$email = $_POST['email'];
$movieID = $_POST['id'];

$sql = "DELETE FROM tickets WHERE email = '$email' AND movieID = '$movieID'";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Ticket deleted successfully";
    header("Location: admin.php");
} else {
    echo "Error deleting ticket: " . mysqli_error($conn);
}

?>

<!-- This is a PHP code that is used to delete a ticket record 
from a database table named "tickets". 
The code starts by including a file named "db.php" which 
likely contains the database connection details.

The code then obtains two variables from a POST request: 
$email and $movieID. These variables are used in the SQL query to delete 
a ticket record from the "tickets" table where the email and movieID match
the values of the $email and $movieID variables.

The mysqli_query() function is used to execute the SQL query, 
and the result is stored in the $result variable.

If the SQL query is successful (i.e., $result is true), 
the code prints "Ticket deleted successfully" and then redirects the user
to the admin.php page using the header() function. If the SQL query fails, 
the code prints an error message that includes the error message returned 
by mysqli_error().-->
