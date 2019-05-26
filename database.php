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
                    <li class="nav-item active">
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
        <div class="container cont-titles">
            <h5><strong>Departments</strong></h5>
        </div>
        <div class="row">
            <div class="col-sm-2 text-center" style="margin-bottom: 5px;">
                <button type="button" onclick="hideShow()" class="mybutton btn btn-secondary color-blue color-link">Department</button>
            </div>
            <div class="col-sm-10">
                <div class="container table-responsive">
                    <table class="table table-dark" id="tabledep">
                        <thead>
                            <tr class="color-blue">
                                <th scope="col">Department Number</th>
                                <th scope="col">Department Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include_once('./class/db.php');
                                include_once('./class/departments.php');
                                $db = new DB("hr");
                                $con = $db->get_connection();
                                $dep = new Departments();
                                $deps = $dep->get_departments($con);
                                
                                foreach($deps as $x => $x_value) {
                                    
                                    echo '<tr><td>'.$x.'</td><td>'.$x_value.'</td></tr>';    

                                }

                                $db->close_connection();
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="container cont-titles">
            <h5><strong>Employees</strong></h5>
        </div>
        <div class="row">
            <div class="col-md-3 offset-md-4 col-sm-4 offset-sm-2 col-5 offset-2">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Employee Number..." id="employee" maxlength="11">
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-3">
                <button type="button" onclick="getEmp()" class="mybutton btn btn-secondary color-blue color-link">Submit</button>
            </div>                    
        </div>
        <div class="container table-responsive">
            <table class="table table-dark">
                <thead>
                    <tr class="color-blue">
                        <th scope="col">Employee No.</th>
                        <th scope="col">Department No.</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                    </tr>
                </thead>
                <tbody id="result">
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