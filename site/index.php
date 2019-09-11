<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Abaev Stanislav</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/particle-js.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
	integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Hepta+Slab:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<div id="particles-js">
			<div class="header__name">Stainslav Abaev<br>
				Junior frontend developer
			</div>
			
			<nav class="nav">
				<ul>
					<li><a href="#aboutme">About me</a></li>
					<li><a href="#">My skills</a></li>
					<li><a href="#myportfolio">Portfolio</a></li>
					<li><a href="#">Contacts</a></li>
				</ul>
			</nav>
			<i class="fas fa-angle-double-left"></i>
			<i class="fas fa-arrow-up"></i>
		</div>
	</header>
	<section id="aboutme" class="about" >
		<div class="container">

			<div class="about__wrapper">
				<div class="left">
					<div class="about__header">About Me</div>
					<div class="about__text"> My name is Stanislav. I'm 21 years old. Currently living in Vladikavkaz, Russia.
						<span>Education:</span> North Ossetian State University named by K.L.Khetagurov. 	<br> 
						I liked to study front-end development while studying at the university.  
						<div class="about__text-skills">
							<span>Skills:</span>
							<ul>
								<li data-tooltip="I'm small tooltip. Don't kill me!">HTML</li>
								<li>CSS (flexbox,some Bootstrap)</li>
								<li>Basics of Bootstrap 4</li>
								<li>BEM</li>
								<li>Sass(in processing)</li>
								<li>JavaScript</li>
								<li>Jquery</li>
								<li>Basiсs of Git</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="right">
					<img src="img/me.jpg" alt="" class="photo">
				</div>
			</div>
		</div>
		</section>
		<section id="myportfolio" class="portfolio" >
			<div class="container">
				<div class="portfolio__header">
					Portfolio
				</div>
				<div class="portfolio__text">
				Here is some of my works.
				</div>
				<div class="portfolio__inner">

					<!--КАРТОЧКИ-->

					<div class="card middle">
						<div class="front">
							<img src="img/free-psd.png" alt="">
						</div>
						<div class="back">
							<div class="back-content">
								<span class="portfolio__work-text">In this work I used HTML,CSS,Jquery.Learned how to add sliders on page and Google map in footer.This work is adaptive.
									<br><a href="../works/last/index.html" target="blank">This work</a></span>
							</div>
						</div>
					</div>
					<!---->
					<div class="card middle">
						<div class="front">
							<img src="img/myWork.png" alt="">
						</div>
						<div class="back">
							<div class="back-content">
								<span class="portfolio__work-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime facilis, enim fugit reiciendis magnam. Quas esse delectus impedit amet aut!
									<br><a href="../works/paul lapkin/index.html" target="blank">This work</a></span>
							</div>
						</div>
					</div>
						<!---->
					<div class="card middle">
						<div class="front">
							<img src="img/sweeden.png" alt="">
						</div>
						<div class="back">
							<div class="back-content">
								<span class="portfolio__work-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime facilis, enim fugit reiciendis magnam. Quas esse delectus impedit amet aut!
									<br><a href="../works/sweeden/index.html" target="blank">This work</a></span>
							</div>
						</div>
					</div>
					<!---->
					<div class="card middle">
						<div class="front">
							<img src="img/golden.png" alt="">
						</div>
						<div class="back">
							<div class="back-content">
								<span class="portfolio__work-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime facilis, enim fugit reiciendis magnam. Quas esse delectus impedit amet aut!<br><a href="../works/golden/index.html" target="blank">This work</a></span>
							</div>
						</div>
					</div>
					<!---->
					<div class="card middle">
						<div class="front">
							<img src="img/tea-store.png" alt="">
						</div>
						<div class="back">
							<div class="back-content">
								<span class="portfolio__work-text">My first work. Without javascript. Only HTML and CSS(plus flexbox)<br><a href="../works/tea-store/index.html" target="blank">This work</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer class="footer">
		<div class="container">
			<div class="links">
				<i class="fab fa-vk"></i>
			</div>
		</div>
	</footer>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/particles.js"></script>
<script src="js/app.js"></script>
<script src="js/contactform.js"></script>
<script src="js/main.js"></script>
</body>
</html>
