<!--In this updated code, 
I added a meta tag to the HTML header to specify the viewport width for 
responsive design. I also added a max-width property to the .form-wrapper class 
in the CSS to limit the size of the form on larger screens. 
Finally, I added a media query to adjust the size and spacing of elements 
on smaller screens. This makes the form easier to use and read on mobile devices.
-->

<?php
session_start();

include 'db.php';
?>


<!--This is an HTML code that displays a registration form. 
The form contains two input fields for the user to enter 
their email and password, and a submit button.

The title tag sets the title of the page to "Register Form". 
The meta tag sets the viewport of the page to the width of 
the device and initial scale of 1.

The code includes an external stylesheet named "style.css" 
to apply styling to the HTML elements.

The form-wrapper div class is used to wrap the entire form. 
The h1 tag displays the heading "Register" at the top of the form.

The form method is set to "post", which means that the form 
data will be sent to the server using the HTTP POST method. 
The action attribute is set to "register.php", which is the 
URL of the server-side script that will handle the form submission.

The form contains two input fields:

Email: An email input field for the user to enter their email address.
Password: A password input field for the user to enter their password.
Both input fields have the "required" attribute, which means that the 
user must enter a value in order to submit the form.

The submit button has the value "Register", which will be displayed 
on the button. When the user clicks the submit button, the form data 
will be sent to the server-side script specified in the action attribute.

At the bottom of the form, there is a paragraph that says "Already 
have an account? Sign in here." with a link that takes the user to 
the sign-in page.-->


<!DOCTYPE html>
<html lang="en">
<html>
<head>

<style>
body {
  background-image: url('https://atalian.co.th/wp-content/uploads/sites/21/2019/07/4_Keeping-Up-with-the-Cinema-Cleanliness.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

	<title>Register Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body
class="m-0 border-0 bd-example">
	<div class="form-wrapper">
		<h1>Register</h1>
		<form method="post" action="register.php">
			<div class="input-group">
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>
			</div>

			<div class="input-group">
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" required>
			</div>

			<input type="submit" value="Register">
			<p>Already have an account? <a href="login.php">Sign in here</a>.</p>
		</form>
	</div>



    <?php
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($email) || empty($password))
            return print "Please fill all the fields.";

        $query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
        $result = mysqli_prepare($conn, $query);
        $results = mysqli_stmt_execute($result);
        if ($results) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header("location: index.php");
        } else {
            return print("Something went wrong!");
        }
    }
    ?>


</body>
</html>
