<?php
    session_start(); 
    include_once('./class/user.php');
    include_once('./class/db.php');
    if (isset($_POST["username"])) {
        if (!User::is_loggedin()) {
            $db = new DB("wh");
            $con = $db->get_connection();
            $user = new User();
            $login = $user->login($_POST['username'], $_POST['password'], $con);
            $db->close_connection();
            if (!$login) {
                $message = "Username and/or Password incorrect.\\nTry again.";
                echo "<script type='text/javascript'>alert('$message');</script>";  
            }   
            else {
                $message = "Logged in";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

        }

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
<style>
textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
.uneditable-input:focus {
    border-color: #303030;
    box-shadow: 0 1px 1px #303030 inset, 0 0 8px #303030;
    outline: 0 none;
}
</style>

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
                    <li class="nav-item active">
                        <a class="nav-link" href="./index.php">Home</a>
                    </li>
                     <?php
                        if (User::is_loggedin()) {
                            echo "<li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"./article.php\">Article</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"./database.php\">Database Review</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"./report.php\">Report</a>
                            </li>";
                        }
                    ?> 
                </ul>

                <?php        
                    if (User::is_loggedin()) {

                        echo "<ul class='nav navbar-nav ml-auto'>
                        <li class='nav-item'>
                          <a class='nav-link' href='logout.php'>Logout</a>
                        </li>
                      </ul>";    
                    } 
                    else {

                        echo "<form class='form-inline my-2 my-lg-0' action=".$_SERVER['REQUEST_URI']." method='post'  autocomplete='off'> 
                        <input class='form-control mr-sm-2' type='text' placeholder='Username' name='username' size='20' required style='margin-bottom: 3px;'>
                        <input class='form-control mr-sm-2' type='password' placeholder='Password' name='password' size='20' maxlength='20' required style='margin-bottom: 3px;'>
                        <button type='submit' class='btn btn-secondary btn-sm' name='login' value='login' style='margin-bottom: 2px;'>Log in</button>
                        </form>";
                         
                    }   
                          
                ?>
            </div>
        </nav>
    </header>
    <!-- Header -->
    <!-- Main -->
    <main role="main" class="flex-shrink-1">
        <div class="container cont-titles">
            <h5><strong>Playing and Listening to Music</strong></h5>
        </div>
        <div class=container>
            <div class="alert color-black">
                <p> I like different genres of music like Rock, Funk Rock, Reggae, etc. 
                    One of my favourite bands is Red Hot Chili Peppers. 
                    <br>On the other hand, I play Bass. The acoustic bass guitar (sometimes shortened to acoustic bass) is a bass instrument with a hollow wooden body similar to,
                    though usually larger than a steel-string acoustic guitar. Like the traditional
                    electric bass guitar and the double bass, the acoustic bass guitar commonly has four #
                    strings, which are normally tuned E-A-D-G, an octave below the lowest four strings of
                    the 6-string guitar, which is the same tuning pitch as an electric bass guitar. Below I am going to detail
                    the most important bass brands.</p>
            </div>
        </div>
        <div class="container cont-titles">
            <h5><strong>Best Bass Brands</strong></h5>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-sm-6">
                    <div class="card text-white bg-secondary mb-3">
                        <div class="card-header color-black">
                            <h6><strong>Fender</strong></h6>
                        </div>
                        <img class="card-img-top" src="./img/fender.jpg" alt="Card image cap">
                        <div class="card-body color-blue">
                            <p class="card-text">Fender makes great basses. The Jazz bass and Precision bass are iconic
                                in the music world. There is also the Mustang bass, but it's not as popular.
                                Different models of Jazz and Precision basses are available at prices from $500 to
                                $2000. You can't go wrong with any of them.
                                The difference between a J bass and a P bass lies in the neck width at the nut, the body
                                shape, and the pickups. The P bass has more of a low end growl, in your face tone. The J
                                bass has a brighter tone with more mid-range growl. If you can't decide between the two,
                                Duff McKagan's signature model is a good choice. It has a both jazz bass and precision
                                bass pickups.
                                Notable players that have played Fender basses over the years include: Flea, Sting, John
                                Paul Jones, Roger Waters, Duff McKagan, Mike Dirnt, and Nate Mendel.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card text-white bg-secondary mb-3">
                        <div class="card-header color-black">
                            <h6><strong>Ibanez</strong></h6>
                        </div>
                        <img class="card-img-top" src="./img/ibanez.jpg" alt="Card image cap">
                        <div class="card-body color-blue">
                            <p class="card-text">
                                Another major bass maker is Ibanez. They have been making good basses for decades,
                                and their model line up is massive! We are talking 10 different series with different
                                models
                                in each series.
                                Of all the series, the SR is the most popular.
                                They have a unique body shape that sits nicely in your
                                lap for relaxed sessions. The finishes on Ibanez basses
                                are unique, featuring a woody look with great detail.
                                The main standout feature of Ibanez basses to me is their
                                tonal capabilities. You can cover a lot of styles with the electronics that Ibanez is
                                putting in their basses.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card text-white bg-secondary mb-3">
                        <div class="card-header color-black">
                            <h6><strong>Ernie Ball Music Man</strong></h6>
                        </div>
                        <img class="card-img-top" src="./img/Ernie Ball Music Man.jpg" alt="Card image cap">
                        <div class="card-body color-blue">
                            <p class="card-text">Another high-quality bass brand is Music Man by Ernie Ball. The most
                                popular model is by far the Stingray. Flea of the Red Hot Chili Peppers played a
                                Stingray for a large part of his career. These are high quality basses. They feature an
                                18-volt pream and 3 band EQ to allow you to dial in a wide variety of tones.

                                With high quality comes high price. Most of the Music Man basses ring up at about $2000.
                                This is not a beginner price point. I recommend beginners choose a brand that offers an
                                entry level priced model.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="card text-white bg-secondary mb-3">
                        <div class="card-header color-black">
                            <h6><strong>Yamaha</strong></h6>
                        </div>
                        <img class="card-img-top" src="./img/yamaha.jpg" alt="Card image cap">
                        <div class="card-body color-blue">
                            <p class="card-text">Another giant in the bass world is Yamaha. They've been making bass
                                guitars since before I was alive. Their basses remind me of Ibanez. The bodies and
                                finishes are of similar shape and look. A great thing about Yamaha is they have a
                                variety of models from $300 on up to $3,000.

                                They make bass guitars with nearly every kind of pickup configuration. The BB series has
                                the P bass/J bass pickup combo I mentioned above. They also feature active or passive
                                modes. Preamps with EQ's are common as well. Like Ibanez, Yamaha makes basses that cover
                                a wide range of styles. This makes them a brand to consider when shopping for a bass
                                guitar.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container cont-titles">
            <h5><strong>The following videos show Flea playing a bass and one of the most successful song of Red Hot Chili Peppers</strong></h5>
        </div>
        <div class="container cont-titles">
            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-6 col-md-12 mb-4">

                    <!--Modal: Name-->
                    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">

                            <!--Content-->
                            <div class="modal-content">

                                <!--Body-->
                                <div class="modal-body mb-0 p-0">

                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                        <iframe class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/KE9t6DAvdtQ" allowfullscreen></iframe>
                                    </div>

                                </div>

                                <!--Footer-->
                                <div class="modal-footer justify-content-center">

                                    <button type="button" class="btn btn-secondary btn-lg"
                                        data-dismiss="modal">Close</button>

                                </div>

                            </div>
                            <!--/.Content-->

                        </div>
                    </div>
                    <!--Modal: Name-->

                    <a><img class="img-fluid z-depth-1" src="./img/flea2.jpg" alt="video" data-toggle="modal"
                            data-target="#modal1"></a>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-6 col-md-6 mb-4">

                    <!--Modal: Name-->
                    <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">

                            <!--Content-->
                            <div class="modal-content">

                                <!--Body-->
                                <div class="modal-body mb-0 p-0">

                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                        <iframe class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/Q0oIoR9mLwc?list=RDQ0oIoR9mLwc" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-center">

                                    <button type="button" class="btn btn-secondary btn-lg"
                                        data-dismiss="modal">Close</button>

                                </div>

                            </div>
                            <!--/.Content-->

                        </div>
                    </div>
                    <!--Modal: Name-->

                    <a><img class="img-fluid z-depth-1" src="./img/bandvideo.jpg" alt="video" data-toggle="modal"
                            data-target="#modal6"></a>

                </div>
                <!-- Grid column -->
            </div>
            <!--
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


        </div> -->
        <!-- Footer Elements -->

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
</body>

</html>