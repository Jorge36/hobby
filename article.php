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
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Hobby</title>
</head>

<style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: 100%;
    }
    .img-thumbnail{
        width:190px;
        height:167px;
        border: none;
    }
    body {
        font-family: 'Rock Salt', cursive;
    }
    
    .btn.focus, .btn:focus, .btn:hover {

        color: white;
        box-shadow: 0 0 0 0.2rem white;

    }
}
.btn:hover {
    /* color: #212529; */
    text-decoration: none;
    }

</style>

<body style="margin-top: 50px;background-image: url(./img/header-bg.jpg);">
    <!-- Header style="background-image: url(https://cdn.shopify.com/s/files/1/1901/3073/t/7/assets/header-bg.jpg);"--> 
    <header>
        <nav class="navbar navbar-expand-md fixed-top navbar-dark color-black" >
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
                        <a class="nav-link " href="./index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./article.php">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./database.php">Database Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./report.php">Report</a>
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

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        </ul>

    <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/band3.jpg" alt="Los Angeles" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="./img/band1.jpg" alt="Chicago" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="./img/band2.jpg" alt="New York" width="1100" height="500">
            </div>
        </div>

<!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <div class="container" style="margin-top: 50px;">
        <div class="container text-center">
            <h4>Red Hot Chili Peppers</h4><br>
            <p style="font-family: 'Open Sans', sans-serif;"> Red Hot Chili Peppers are an American rock band formed in Los Angeles in 1983. 
                The group's musical style primarily consists of rock with an emphasis on funk, 
                as well as elements from other genres such as punk rock and psychedelic rock. 
                When played live, their music incorporates elements of jam band due to the 
                improvised nature of many of their performances. Currently, the band consists 
                of founding members vocalist Anthony Kiedis and bassist Flea (Michael Peter Balzary),
                longtime drummer Chad Smith, and former touring guitarist Josh Klinghoffer.
            </p>
        </div>
        <div class="container" style="margin-top: 30px;">
            <div class="row text-center">
                <div class="col-sm-6">
                <h5>Tours</h5><br>
                <a href="#tour">
                <img src="./img/tour.jpg" class="img-thumbnail" alt="Tour">
                </a>
                    <div class = "caption" style="margin-top: 30px;">
                        <h6>Popular Tours of Red Hot Chili Peppers</h6>
                    </div>
                </div>
                <div class="col-sm-6">
                <h5>Albums</h5><br>
                <a href="#album">
                <img src="./img/media.jpg" class="img-thumbnail" alt="album">
                </a>
                <div class = "caption" style="margin-top: 30px;">
                        <h6>Studio albums of Red Hot Chili Peppers</h6>
                </div>
                </div> 
            </div>
        </div> 
    </div>     

        <!-- Tour Section -->
    <div class="container text-center" style="margin-top: 50px;" id="tour">
    <br>
    <br>
    <br>
    <h4>Tours</h4><br>
    <div id="accordion">
        <div class="card color-black">
            <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn color-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Red Hot Chili Peppers 1983 Tour
                </button>
            </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body" style="font-family: 'Open Sans', sans-serif;">
            The Red Hot Chili Peppers 1983 Tour was the first-ever concert tour by Red Hot Chili Peppers. 
            Originally formed as a joke band called "Tony Flow And The Miraculously Majestic Masters Of
            Mayhem" by bassist Flea, guitarist, Hillel Slovak and drummer, Jack Irons, all friends from 
            high school. They asked fellow high school friend, Anthony Kiedis to join them onstage for 
            their first-ever show at the Hollywood, California venue known as The Rhythm Lounge. 
            Kiedis had previously been a MC to introduce his friend's former bands. 
            </div>
            </div>
        </div>
        <div class="card color-black">
            <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn color-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Red Hot Chili Peppers 2001 Tour 
                </button>
            </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body" style="font-family: 'Open Sans', sans-serif;">
            The Red Hot Chili Peppers 2001 Tour was a short concert tour by Red Hot Chili Peppers.
             The tour followed a few months after the end of the band's hugely successful 
             Californication Tour. The 2001 tour was made up mostly of benefit shows and 
             festivals which were scattered throughout the year starting in January and 
             ending in December all while the band was in the process of writing and 
             recording their next album, 2002's By the Way.
            </div>
            </div>
        </div>
        <div class="card color-black">
            <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn color-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Stadium Arcadium World Tour (2006–07)
                </button>
            </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body" style="font-family: 'Open Sans', sans-serif;"> 
            The Stadium Arcadium World Tour was a 2006–2007 concert tour by the band Red Hot Chili Peppers 
            in support of their ninth studio album, Stadium Arcadium. The band started out with a 
            pre-tour promotional leg of dates around the world while the world tour was composed of six legs, 
            three in Europe, one in Australia, 
            New Zealand and Asia, and the other two in the US and Canada.
            </div>
            </div>
        </div>
        <div class="card color-black">
            <div class="card-header" id="headingFour">
            <h5 class="mb-0">
                <button class="btn color-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                The Getaway World Tour
                </button>
            </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body" style="font-family: 'Open Sans', sans-serif;"> 
            The Getaway World Tour was a concert tour by American rock band Red Hot Chili 
            Peppers that was in support of their eleventh studio album, The Getaway which was 
            released on June 17, 2016. It marked the first time since June 2014 that the band has toured. 
            The tour began with benefit shows and North American festival dates in February 2016 followed 
            by a summer festival tour with dates in Europe, Asia and North America starting in May 2016 
            and ending in August 2016. 
            </div>
            </div>
        </div>
    </div>
    </div> 

<!-- Studio Album SECTION-->
    <div class="container text-center" style="margin-top: 50px;" id="album">
    <br>
    <br>
    <br>
    <h4>Studio albums</h4><br>
        <table class="table color-link">
        <thead class="thead-dark">
            <tr>
            <th scope="col">No.</th>
            <th scope="col">Title</th>
            <th scope="col">Year</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td><a class="btn btn-outline-dark color-link" href="https://en.wikipedia.org/wiki/The_Getaway_(Red_Hot_Chili_Peppers_album)" role="button">The Getaway</a></td>
            <td>2016</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td><a class="btn btn-outline-dark color-link" href="https://en.wikipedia.org/wiki/I%27m_with_You_(album)" role="button">I'm with You</a></td>
            <td>2011</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td><a class="btn btn-outline-dark color-link" href="https://en.wikipedia.org/wiki/Stadium_Arcadium" role="button">Stadium Arcadium</a></td>
            <td>2006</td>
            </tr>
            <tr>
            <th scope="row">4</th>
            <td><a class="btn btn-outline-dark color-link" href="https://en.wikipedia.org/wiki/By_the_Way" role="button">By the Way</a></td>
            <td>2002</td>
            </tr>
            <tr>
            <th scope="row">5</th>
            <td><a class="btn btn-outline-dark color-link" href="https://en.wikipedia.org/wiki/Californication_(album)" role="button">Californication</a></td>
            <td>1999</td>
            </tr>
            <tr>
            <th scope="row">6</th>
            <td><a class="btn btn-outline-dark color-link" href="https://en.wikipedia.org/wiki/One_Hot_Minute" role="button">One Hot Minute</a></td>
            <td>1995</td>
            </tr>
            <tr>
            <th scope="row">7</th>
            <td><a class="btn btn-outline-dark color-link" href="https://en.wikipedia.org/wiki/Blood_Sugar_Sex_Magik" role="button">Blood Sugar Sex Magik</a></td>
            <td>1991</td>
            </tr>
            <tr>
            <th scope="row">8</th>
            <td><a class="btn btn-outline-dark color-link" href="https://en.wikipedia.org/wiki/Mother%27s_Milk" role="button">Mother's Milk</a></td>
            <td>1989</td>
            </tr>
            <tr>
            <th scope="row">9</th>
            <td><a class="btn btn-outline-dark color-link" href="https://en.wikipedia.org/wiki/The_Uplift_Mofo_Party_Plan" role="button">The Uplift Mofo Party Plan</a></td>
            <td>1987</td>
            </tr>
            <tr>
            <th scope="row">10</th>
            <td><a class="btn btn-outline-dark color-link" href="https://en.wikipedia.org/wiki/Freaky_Styley" role="button">Freaky Styley</a></td>
            <td>1985</td>
            </tr>
            <tr>
            <th scope="row">11</th>
            <td><a class="btn btn-outline-dark color-link" href="https://en.wikipedia.org/wiki/The_Red_Hot_Chili_Peppers_(album)" role="button">The Red Hot Chili Peppers</a></td>
            <td>1984</td>
            </tr>
        </tbody>
        </table>
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
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="./js/custom.js"></script>
</body>

</html>