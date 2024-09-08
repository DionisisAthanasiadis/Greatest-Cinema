<?php
session_start();
include 'db.php';

// in the user's login the admin will have to put email admin@gmail.com and
// the password is admin to enter and the site administrator can control his part of the site.

if (isset($_SESSION['email'])) {
    if ($_SESSION['email'] != 'admin@gmail.com')   
        header('location: index.php');
} else {
    header('location: index.php');
}

if(isset($_GET['del'])){
    $ids = $_GET['id'];
    mysqli_query($conn, "DELETE FROM tickets WHERE id = '$ids'") or die(mysql_error()); 
    header("admin.php");  
}

?>
<!-- Sidebar (hidden by default) -->
<a href="javascript:void(0)" onclick="w3_close()">
  <a href="http://localhost/prototype1/index.php" onclick="w3_close()" class="w3-bar-item w3-button"><h1><b>Go back to Movies</b></h1></a>

<!doctype html>
<html lang="en">
<head>

<style>
body {
  background-image: url('https://cdn.flynews.gr/2018/05/Cinema-projector-3-1021x580.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  max-width: 100%;

}
</style>

	<title>Admin Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>
<body class="m-0 border-0 bd-example">   
    <br><br>
    <h1 class="w3-xxxlarge w3-text-green w3-text-center text-align: center "><b><u>Tickets You Chose To Watch</u></b></h1>
    <br><br>
    <table>
    <thead>
        <tr>
            <th>&#8595;
ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>&#8595;
EMAIL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>&#8595;
DESCRIPTION</th>
        </tr>
</thead>
    </table>
    <br><br>
</body>

</html>

<?php
$sql = "SELECT * FROM tickets";
$result = $conn->query($sql);

echo "
<div class='container' style'margin-top: 100px;'>
<table class='table table-dark table-striped'>";


if ($result->num_rows > 0) {    
    for ($i = 0; $i < $result->num_rows; $i++) {
        $row = $result->fetch_assoc();
        $ids=$row['id'];
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["movie"] . "</td>";
         
        echo "<td> <a href ='admin.php?id=$ids&del=1'><center>Delete</center></a>";
      
        echo "</tr>";
    }
} else {
    echo "0 results";
}

echo "</table>
</div>";
?>



<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>


<!-- The first two lines start a PHP session and include a separate PHP file with the database connection details.
The next four lines check if the user has a valid session with administrator privileges.
If the user does not have a valid session, they are redirected to the login page. 
If the user has a valid session, but is not an administrator, they are redirected to the home page.
If the URL contains a del parameter with a value of 1, 
the code will delete the ticket with the corresponding id from the database.
The HTML code includes a link to go back to the movies page and displays a background image of a cinema projector.
The table headers are displayed.
The PHP code retrieves the ticket data from the database 
using an SQL query, and displays it in a table. 
The for loop iterates over each row in the result set, and prints out the ticket details in the table.
For each ticket, there is a "Delete" link that the administrator can click to delete the ticket from the database.
Finally, some CSS styling is applied to the table to give it a black border and collapse the cell borders. -->
