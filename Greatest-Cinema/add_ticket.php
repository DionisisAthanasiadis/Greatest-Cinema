<?php
session_start();
include 'db.php';

$movie = $_POST['movie'];
$email = $_POST['email'];

$query = "INSERT INTO tickets (email, movie) VALUES (?, ?)";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "ss", $email, $movie);
$result = mysqli_stmt_execute($stmt);
if ($result) {
    echo "<script>alert('Ticket added successfully!')</script>";
} else {
    echo "Something went wrong!";
}

?>

<!-- First, it starts a new session and includes a file named "db.php", 
which is presumably responsible for connecting to the database.

Then, it retrieves the movie and email values from a POST request, 
which are assumed to have been submitted from a form.

After that, it defines an SQL query using placeholders for the email and movie
values. It then prepares the statement using mysqli_prepare(), 
which helps to prevent SQL injection attacks.

Next, it binds the values of the email and movie variables to the placeholders 
in the prepared statement using mysqli_stmt_bind_param().

Then, it executes the prepared statement using mysqli_stmt_execute(), 
which returns true if the insertion was successful and false otherwise. 
If it was successful, it displays a success message using JavaScript alert. 
If not, it displays a generic error message.-->