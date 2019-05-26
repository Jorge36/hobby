<?php
	    session_start(); 
		include_once('./class/user.php');
		if (!User::is_loggedin()) {
		    header("Location: index.php");
		}
	?>
	
	<!doctype html>
	<html lang="en">

	<head>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <link rel="stylesheet" href="./css/custom.css">
	    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
	        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	    <title>Hobby</title>
	</head>
	<style>.indent{ padding-left: 1.8em }</style>	
	<body>
	    <!-- Header -->
	    <header>
	        <nav class="navbar navbar-expand-md fixed-top navbar-dark color-blue">
	            <!-- <a class="navbar-brand" href="./index.html">
		<img src="./img/Coffee-Cup-icon.png" class="img-pos" width="30" height="30" alt="">
		</a> -->
	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
	                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	                <span class="navbar-toggler-icon"></span>
	            </button>

	            <div class="collapse navbar-collapse" id="navbarSupportedContent">
	                <ul class="navbar-nav mr-auto">
	                    <li class="nav-item">
	                        <a class="nav-link" href="./index.php">Home</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="./article.php">Article</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" href="./database.php">Database Review</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link active" href="./report.php">Report</a>
	                    </li>
	                </ul>
	                <ul class='nav navbar-nav ml-auto'>
	                    <li class='nav-item'>
	                        <a class='nav-link' href='logout.php'>Logout</a>
	                    </li>
	                </ul>
	            </div>
	        </nav>
	    </header>
	    <!-- Header -->
	    <!-- Main -->
	    <main role="main" class="flex-shrink-1">
	        <div class=container>
	            <div class="alert color-blue">
	                <p class="text-center">
	                    Full Name: Jorge Alberto Robla<br>
	                    Email:<a href="mailto:jorgearobla@gmail.com" class="color-link"> jorgearobla@gmail.com</a><br>
	                    Student ID: 2019070
	                </p>
	            </div>
	            <div class="alert color-blue">
	                <p>
	                    Goals of site: What hobbie the site is about:
						This site is about music in General. I like listening to music (different types and styles) and I also play bass.
	                </p>
	            </div>
	            <div class="alert color-blue">
	                <p>
	                    A brief explanation of the technology used and how it was implemented:
						<ul class="nav nav-tabs">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#html5">Bootstrap</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#php">PHP</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#js">JavaScript</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#more">More</a>
							</li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div class="tab-pane fade show active" id="html5">
								<p><strong> What is bootstrap? </strong> <br>Bootstrap is an open source toolkit for developing with HTML, CSS, and JS. 
								In other words, Bootstrap is a free front-end framework for faster and easier web development.<br>
								I used this toolkit to develop a responsive web page which can be executed in different devices. To implement this framework, we must add to our
								pages the bootstrap's stylesheet and scripts to reuse its tyles, javascript functions and jquery library. <br><br>
								<strong> How it was implemented? </strong><br>
								Firstly,  I added the styles and javascript libraries to our pages. To add the style (css file) I used the tag &lt;link&gt; and to add the javascript and jquery libraries (js files) I used the tag &lt;script&gt.
								These tags have the href attribute to reference the files.

								Secondly, I copied a starter template from https://getbootstrap.com/ which we can use to begin with the development of the web page. 
								
								Lastly, we can add our styles or override the bootstrap's styles and/or we can develop new javascript code to modify the content and behavior of the Website. 
								To do this we must add our css file with the tag &lt;link&gt; below bootstrap's link because If we want to override a style, this order will make the override works. 
								
								I added several bootstrap's components in my pages, for example: <br><br></p>
								<p class="indent"> 
											 1. Carousel, Accordion or Collapse which require the use of Jquery library to work <br>
											 2. Navbar to design the menu <br>
											 3. Cards to display images and text, etc. <br><br>
								</p>
								<p>
								On the other hand, I also use Grid System to layout and align content in index.php, article.php and database.php.
								</p>
							</div>
							<div class="tab-pane fade" id="php">
								<p><strong> What is PHP?</strong><br> PHP is an open source programming language and server side scripting language that is
									used to develop interactive Web sites.<br><br>
									<strong> How it was implemented? </strong><br>
									I used this programming language to develop the server code. This code was developed following the oriented to object paradigm (OOP).  <br>
									I created 3 classes: <br></p>
									<p class="indent"> 
									1. User: This class contains properties and methods related to the interaction of a user with the session. For example login, logout, is_loggedin, session.
									Sessions, Logout and is_loggedin methods are static because they use the $_SESSION array which is a persisten global variable for the current browser. In other words, each session has an ID wich belongs to one browser.  
									Login is a instance method which retrieve the username and password from the database to check if that account exist. This method has 3 formal parameters, $username, $password and $conexion.<br><br>
									2. DB: This class performs the connection with the databases (human_resources and id9592484_user). This class has two instance methods which are get_connection() and 
									close_connection() and a constructor. The constructor has a formal parameter which is the name of the database to create the connection. This constructor return a new connection to be used by the classes user and departments.
									If we replace the value "wh" by "hr" in index.php line 7, this Web Site can be run in Wamp, Xampp, etc. 
									"wh" = webhost, so the DB constructor will create a connection with the database webhost and will check the username and passord against that database
									"hr" = human_resource, so the DB constructor will create a connection with the database human_resource and will check the username and passord against that database <br><br>
									3. Deparments: This class is used in report.php to retrieve information of the employees and deparments from human_resource database.
									It has two methods, get_departments($con) and get_emp_work_for_dept($con, $emp).<br> <br>
									</p>
									<p>
									To use PHP in the pages we use the tags &lt;?php and ?&gt;. We can create a class with statement new NameClass(). To call instance methods we use the operator -> and to call static methods the operator ::.
									To connect with databases I used the mysqli class.
									</p>
							</div>
							<div class="tab-pane fade" id="js">
								<p><strong> What is JavaScript?</strong><br>JS is a client-side scripting language that allows Web page authors
								to develop interactive Web pages and sites<br><br>
								<strong> How it was implemented? </strong><br>
								1. Raw Javascript: I used Javascript to program the behavior of the web site. The first table in database.php, which is populated with departments from human_resource database, is shown/hidden by JavaScript code. 
								The element table is accesed by the id "tabledep". Then I loop the element table to get every row. In every row I use the attribute style, 
								which is an objetc, to change the property display (hide/show).<br><br>
								2. AJAX (Asynchronous JavaScript And XML): With AJAX we can: <br></p>
								<p class="indent"> 
								a. Update a web page without reloading the page<br>
								b. Request data from a server - after the page has loaded<br>
								c. Receive data from a server - after the page has loaded<br>
								d. Send data to a server - in the background<br>
								</p>
								<p>
								In the second table (employee x departments) the event on second button call the handler getEmp(), which is a javascript function. This method do
								the following: </p>
								<p class="indent"> 
										a. getEmp() retrieves the value from the text field (employee number) <br>
										b. getEmp() creates an object of the class XMLHttpRequest<br>
										c. getEmp() sends a request to get_employees.php with the employee number<br>
										d. The server processes the request<br>
										e. The server sends a response back to the web page<br>
										f. The response is read by JavaScript and assign the response to element which has the id "result"<br>
								</p>
							</div>
							<div class="tab-pane fade" id="more">
								<p>I used 3 family fonts from google: Lato, Rock Salt and OpenvSans
								</p>
							</div>
						</div>
					
	              	</p>
	            </div>
	            <div class="alert color-blue">
	                <p>
	                    The list of browsers the application was tested against:
						Google Chrome, Mozilla Firefox, Microsoft Edge, Opera Browser.
	                </p>
	            </div>
	            <div class="alert color-blue">
	                <p>
	                Future features predicted (e.g., if you had another six months to work on this, what else would you
	                do with it?): </p>
					<p class="indent">
					1. I would implement dynamic web pages in my project. In other words, I would create the header and footer in two 
					different files and I would include them into my webpage using include or require statements <br>
					2. I would do a code refactoring to improve code readability and complexity <br>
					3. I would encrypt the password using encryption algorithms to increase the security in my site (e.g. hashed and salted) <br>
					4. I would develop a logged-in timestamp algorithms to check if the login session expiration time is expired. If so, the user would be logged out <br>
					5. I would use PDO instead mysqli to retrieve information from database<br>
					6. I would create a new table in the webhost database to customize the credentials of human_resource database. 
	                </p>
	            </div>
	            <div class="alert color-blue">
	                <p>
	                    Reflection: <br>
					</p>
					<p>
						What did you learn from building this web application:<br>
					</p>
					<p class="indent">	
						1. I learnt how to use bootstrap's carousel and accordion components<br>
						2. How to put content that link the user down into sections on the same page<br>
						3. How to print html code into PHP code using echo and how to concatenate strings in PHP<br>
						4. I learnt some PHP concepts about OOP (static, constructor, methods, etc.)<br>
						5. How to combine PHP, JavaScript and Bootstrap to create a web page<br>
					</p>
						What would you do differently if you had to build it again:</p>
					<p class="indent">	
						1. If I had to build it again I would use PDO library (PHP Data Object) because has the ability to auto-detect varible types and it is more secure.
						   (https://websitebeaver.com/php-pdo-vs-mysqli <br>
						2. I would create 2 files for the header and footer and I use include/require statement to include on my pages 
					</p>			
					</div>
	        </div>
	    </main>
	    <!-- Main -->
	    <!-- Footer -->
	    <footer class="page-footer font-small special-color-dark pt-4">

	        <!-- Footer Elements
		<div class="container">

		<ul class="list-unstyled list-inline text-center">
		<li class="list-inline-item">
		<a class="btn-floating btn-gplus mx-1" target="_blank"
		href="https://plus.google.com/u/0/102645720990525613156?tab=mX">
		<i class="fab fa-google-plus-g"> </i>
		</a>
		</li>
		<li class="list-inline-item">
		<a class="btn-floating btn-li mx-1" target="_blank"
		href="https://ie.linkedin.com/in/jorge-alberto-robla-58a17024">
		<i class="fab fa-linkedin-in"></i>
		</a>
		</li>
		</ul>


		</div>
		Footer Elements -->

	        <!-- Copyright -->
	        <div class="footer-copyright text-center py-3">Copyright © 2019 | Jorge Robla
	        </div>
	        <!-- Copyright -->

	    </footer>
	    <!-- Footer -->

	    <!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	    </script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	    </script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	    </script>
	    <script src="./js/custom.js"></script>
	</body>

	</html>