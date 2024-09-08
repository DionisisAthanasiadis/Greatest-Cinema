<?php
session_start();

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['email']);
	unset($_SESSION['password']);
	header("location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>DionFilm - Greatest Cinema</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
  
body {
  background-color: lightgrey;}
  h3{font-size:1.4vw}


@media only screen and (max-width: 600px) {
    h3{font-size:1.4vw}
    p{font-size:2.4vw}
}

@media only screen and (max-width: 800px) {
  body {
    background-color: #E08B40;
  }
    h3{font-size:1.4vw}
    p{font-size:1,5.4vw}
}

body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}

@media only screen and (max-width: 600px) {
  body {
    background-color: lightblue;
  }
  h3{font-size:2.4vw}
  p{font-size:2.4vw}
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

</style>
</head>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-grey w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:10%;min-width:250px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="#movies" onclick="w3_close()" class="w3-bar-item w3-button">Movies</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
  <a href="admin.php" onclick="w3_close()" class="w3-bar-item w3-button">Admin</a>
  <a href="register.php" onclick="w3_close()" class="w3-bar-item w3-button">Register</a>
  <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button">SignIn</a>
  <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button">LogOut</a>

</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-grey w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-center w3-padding-16"><b>DionFilm</b></div>
  </div>
</div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="movies">
    <div class="w3-quarter">
    </figure> 
    <img src="https://m.media-amazon.com/images/M/MV5BMTQ2NzUxMTAxN15BMl5BanBnXkFtZTcwMzEyMTIwMg@@._V1_jpg" alt="Twilight" style="width:100%" >
      <h3><b>Twilight Drama,Fantasy,Romance</b></h3>
      <p>When Bella Swan moves to a small town in the Pacific Northwest, she falls in love with Edward Cullen, a mysterious classmate who reveals himself to be a 108-year-old vampire.</p>
      <button type="submit" class="btn btn-primary" id="movie1" onclick="addTicket(this.id)"><b>Buy
                        Ticket #1</b></button>
    </div>
    <div class="w3-quarter">
      <img src="https://m.media-amazon.com/images/M/MV5BZmU5NTcwNjktODIwMi00ZmZkLTk4ZWUtYzVjZWQ5ZTZjN2RlXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_FMjpg_UX1000_.jpg" alt="Thewalkingdead" style="width:100%">
      <h3><b>The Walking Dead Drama,Horror,Thriller</b></h3>
      <p>Sheriff Deputy Rick Grimes wakes up from a coma to learn the world is in ruins and must lead a group of survivors to stay alive.</p>
      <button type="submit" class="btn btn-primary" id="movie2" onclick="addTicket(this.id)"><b>Buy
                        Ticket #2</b></button>
    </div>
    <div class="w3-quarter">
      <img src="https://m.media-amazon.com/images/M/MV5BMTYyOTAxMDA0OF5BMl5BanBnXkFtZTcwNzgwNTc1NA@@._V1_FMjpg_UX1000_.jpg" alt="Insidious" style="width:100%">
      <h3><b>Insidious Horror,Mistery,Thriller</b></h3>
      <p>A family looks to prevent evil spirits from trapping their comatose child in a realm called The Further.</p>
      <button type="submit" class="btn btn-primary" id="movie3" onclick="addTicket(this.id)"><b>Buy
                        Ticket #3</b></button>
    </div>
    <div class="w3-quarter">
      <img src="https://image.tmdb.org/t/p/w500/7WUHnWGx5OO145IRxPDUkQSh4C7.jpg" alt="Gameofthrones" style="width:100%">
      <h3><b>Game Of Thrones Action,Adventure,Drama</b></h3>
      <p>Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns after being dormant for millennia.</p>
      <button type="submit" class="btn btn-primary" id="movie4" onclick="addTicket(this.id)"><b>Buy
                        Ticket #4</b></button>
    </div>
  </div>

  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="https://m.media-amazon.com/images/M/MV5BMTcxNDU2NTE4Nl5BMl5BanBnXkFtZTcwNzQ1MTEzMw@@._V1_.jpg" alt="Stepup" style="width:100%">
      <h3><b>Step Up 3D Crime,Drama,Music</b></h3>
      <p>Tyler Gage receives the opportunity of a lifetime after vandalizing a performing arts school, gaining him the chance to earn a scholarship and dance with an up and coming dancer, Nora.</p>
      <button type="submit" class="btn btn-primary" id="movie5" onclick="addTicket(this.id)"><b>Buy
                        Ticket #5</b></button>
    </div>
    <div class="w3-quarter">
      <img src="https://images.moviesanywhere.com/472d29d9c25900cbb123a14fbd930745/aa0874ab-64ea-4c6e-b23f-724090a588ab.jpg" alt="8mile" style="width:100%">
      <h3><b>8 Mile Eminem Biography,Drama,Music</b></h3>
      <p>Rap icon Eminem stars in this semi-autobiographical tale of a white kid struggling in the hip-hop scene of 1995 Detroit. 8 Mile is filled with scintillating rap battles and is filmed in a gritty style which perfectly captures urban decay.</p>
      <button type="submit" class="btn btn-primary" id="movie6" onclick="addTicket(this.id)"><b>Buy
                        Ticket #6</b></button>
    </div>
    <div class="w3-quarter">
      <img src="https://m.media-amazon.com/images/M/MV5BZDEyN2NhMjgtMjdhNi00MmNlLWE5YTgtZGE4MzNjMTRlMGEwXkEyXkFqcGdeQXVyNDUyOTg3Njg@._V1_FMjpg_UX1000_.jpg" alt="Spiderman" style="width:100%">
      <h3><b>Spiderman Action,Adventure,Sci-Fi</b></h3>
      <p>After being bitten by a genetically-modified spider, a shy teenager gains spider-like abilities that he uses to fight injustice as a masked superhero and face a vengeful enemy.</p>
      <button type="submit" class="btn btn-primary" id="movie7" onclick="addTicket(this.id)"><b>Buy
                        Ticket #7</b></button>
    </div>
    <div class="w3-quarter">
      <img src="https://play-lh.googleusercontent.com/ZFCOHI66XgvIOBvbP2Ra83GVTK330v7UL-8f9k0y-zGawli1Agu157y_itHXnaAwQX8" alt="Predator" style="width:100%">
      <h3><b>Aliens VS Predator Action,Adventure,Horror</b></h3>
      <p>Requiem, the iconic creatures from two of the scariest film franchises in movie history wage their most brutal battle ever - in our own backyard. When a Predator scout ship crash-lands in the hills outside the town, Alien Facehuggers and a hybrid Alien/Predator are released and begin to terrorize the town.</p>
      <button type="submit" class="btn btn-primary" id="movie8" onclick="addTicket(this.id)"><b>Buy
                        Ticket #8</b></button>
    </div>
  </div>

  
  <hr id="about">

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">  
    <h3><b><u>DionFilm!</u></b></h3><br>
    <img src="https://batterseapowerstation.co.uk/content/uploads/2022/08/Cinema-in-the-Power-Station-image001hero-1600x869.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
    <div class="w3-padding-32">
      <h6><i><u>About The Cinema:</u></i></h6>
      <p>Cinema, also known as the movie theater or the movie house, is a venue where films are shown for public viewing. It is a popular form of entertainment that has been around for over a century. Cinemas typically have multiple screens or theaters, each equipped with a large screen, sound system, and comfortable seating for the audience. The films shown can range from blockbuster Hollywood movies to independent films, foreign films, documentaries, and more. Attending a cinema is a popular social activity, where friends and families can gather to enjoy a shared experience of watching a movie together. Many cinemas offer snacks and refreshments for purchase, such as popcorn, candy, and soft drinks, making it a complete entertainment experience. In recent years, the cinema industry has faced challenges from online streaming services and the COVID-19 pandemic. However, cinemas continue to be an important part of the entertainment industry, and moviegoers still enjoy the experience of watching a film on the big screen in a communal setting.</p>
    </div>
  </div>
  <hr>
  
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32 w3-center">
      <h3>FOOTER</h3>
      <p><b>Safety information:</b> In light of the COVID-19 pandemic, cinemas may want to include information on their safety protocols, such as mask requirements and social distancing guidelines.</p>
      <p><b>Disclaimer:</b> A disclaimer can inform customers that the cinema is not responsible for lost or stolen items, or that the views and opinions expressed in the film are not necessarily those of the cinema.</p>
      <p><b>Thank you message:</b> A simple message of thanks to customers for choosing the cinema can be a nice touch and help to foster a positive relationship between the cinema and its audience.</p>
    </div>  


<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>


<script>
		function addTicket(movieId) {
			const xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function () {
				if (this.readyState == 6 && this.status == 200) {
					console.log(this.responseText);
				}
			};
			xhttp.open("POST", "add_ticket.php", true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send(`movie=${movieId}&email=<?php echo $_SESSION['email']; ?>`);
		}
	</script>


</body>
</html>