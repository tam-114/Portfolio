<?php

if($_POST["submit"]) {
    $recipient="t.stanley@gmail.com";
    $subject="Form to email message";
    $firstname=$_POST["firstname"];
    $emailaddress=$_POST["emailaddress"];
    $comment=$_POST["comment"];

    $mailBody="Name: $firstname\nEmail: $emailaddress\n\n$comment";

    mail($recipient, $subject, $mailBody, "From: $firstname <$emailaddress>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<html>
<head>
	<title>Taylor Stanley: Portfolio</title>
	<link rel="shortcut icon" href="image/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
</head>
<body class="flip-bg">
	<div>
		<ul class="navbar">
			<li class="nav"><a href="https://tam-114.github.io/portfolio/" class="navlink">Home</a></li>
			<li class="nav"><a href="https://tam-114.github.io/portfolio/biography.html" class="navlink">About Me</a></li>
			<li class="nav"><a href="https://tam-114.github.io/portfolio/projects.html" class="navlink">Digital Projects</a></li>
			<li class="nav"><a href="https://tam-114.github.io/portfolio/resume.html" class="navlink">Resume</a></li>
			<li class="nav"><a href="https://tam-114.github.io/portfolio/contact.html" class="navlink">Contact Me</a></li>
			<li class="nav"><img src="image/logo-portfolio3.png" alt="logo TS" class="logo" width="50px" height="50px"></li>
		</ul>
	</div>

<div>
	<h1 class="textcenter">Contact Me</h1>
</div>

<?=$thankYou ?>
<div class="container">
	<form method="post" action="">
		
		<label for="ftname">&#x2740; First Name &#x2740;</label>
		<input type="text" id="ftname" name="firstname" placeholder="Input your first name">

		<label for="ltname">&#x2740; Last Name &#x2740;</label>
		<input type="text" id="ltname" name="lastname" placeholder="Input your last name">

		<label for="emailadd">&#x2740; E-Mail Address &#x2740;</label>
		<input type="email" id="emailadd" name="emailaddress" placeholder="Input your e-mail">

		<label for="comment">&#x2740; Additional Comments &#x2740;</label>
		<textarea id="comment" name="comment" placeholder="Input any comments you have here!" style="height: 100px;"></textarea>

		<input type="submit" value="Submit">
	</form>
	<footer class="textcenter">Taylor Stanley | 2021 &copy;</footer>
</div>