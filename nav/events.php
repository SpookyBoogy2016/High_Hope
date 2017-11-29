<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/modern-business.css" rel="stylesheet">
  </head>

  <style>
a.navbar-brand{
  font-family: serif;
  font-size: 2em;
  color: #0D4068 !important;
}

.nav-link {
  font-family: serif;
  font-size: 1.5em;
  color: #0D4068 !important;
}

.carousel-caption *{
  color: black;
}

.nav-link{
  font-size: 1.3em;
}
.listing{
  border-bottom: 3px solid brown;
  margin-top: 10px;
}
td{
  font-size: 1.2em;
}
  </style>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="../index.html"><img src="../imgs/logo.png"> High Hopes </a>
      <div class="container" style="margin-right: 20px;">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About Us
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="about/resources.html">Resources</a>
                <a class="dropdown-item" href="about/stories.html">Personal Stories</a>
                <a class="dropdown-item" href="about/board.html">Board of Directors</a>
                <a class="dropdown-item" href="about/report.html">Annual Report</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Preschool
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="preschool/classrooms.html">Classrooms</a>
                <a class="dropdown-item" href="preschool/team.html">Meet the Team</a>
                <a class="dropdown-item" href="preschool/parents.html">Preschool Parents</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pediatric Therapy
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="therapy/services.html">Therapy Services</a>
                <a class="dropdown-item" href="therapy/forms.html">Clinical Forms</a>
                <a class="dropdown-item" href="therapy/questions.html">Clinical Billing Questions</a>
                <a class="dropdown-item" href="therapy/therapy.html">Don't steal therapy</a>
                <a class="dropdown-item" href="therapy/team.html">Meet Therapy Team</a>
                <a class="dropdown-item" href="therapy/physicians.html">For Physicians</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="events.php">News and Events</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ways to Give
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="give/apparel.html">High Hopes Apparel</a>
                <a class="dropdown-item" href="give/donate.html">Donate</a>
                <a class="dropdown-item" href="give/involve.html">Get Involved</a>
                <a class="dropdown-item" href="give/wish.html">Wish List</a>
                <a class="dropdown-item" href="give/campaign.html">Capital Campaign Share</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Connecting the Dots
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="connect/planning.html">Educational Planning & Support</a>
                <a class="dropdown-item" href="connect/family.html">Family Support</a>
                <a class="dropdown-item" href="connect/financial.html">Financial Planning</a>
                <a class="dropdown-item" href="connect/recreational.html">Recreational & Therapeutic</a>
                <a class="dropdown-item" href="connect/transitional.html">Transitional Planning</a>
                <a class="dropdown-item" href="connect/tips.html">Tips by & For Parents</a>
                <a class="dropdown-item" href="connect/spotlight.html">Local Spotlight</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Contact
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="contact/contact.html">Contact Us</a>
                <a class="dropdown-item" href="contact/schedule.html">Schedule New Patient</a>
                <a class="dropdown-item" href="contact/volunteer.html">Volunteers</a>
                <a class="dropdown-item" href="contact/employment.html">Employment</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

        <br>
        <br>
        <!-- Page Content -->
        <div class="container">
          <br><br>
          <!-- Page Heading/Breadcrumbs -->
          <h1 class="mt-4 mb-3">
            Event Calendar
          </h1>

          <?php
            //set up month Array
            $m = array("-","January","February","March","April","May","June","July","August","September","October","November","December");
            $db = mysqli_connect('localhost','root','toor','highhopes');
            $query = 'SELECT * FROM `Events` WHERE `EventDate` >= "'.date("Y/m/d").'" ORDER BY `EventDate` ASC';
            $result = mysqli_query($db, $query);
            if(mysqli_num_rows($result) == 0){
              echo "<p>There doesn't seem to be any events here. If this is wrong, please contact the website administrator.</p>";
            }
            else{
              $curr = 0;
              while($row = mysqli_fetch_row($result)){
                $year = explode("-", $row[1])[0];
                $month = explode("-", $row[1])[1];
                $day = explode("-", $row[1])[2];

                if($curr != intval($month)){ //if the last known month is not in the same month as the next even then make a new row
                  if($curr != 0){
                    echo "</table><br>";
                    echo "</div>"; //if not on the first time, close last div
                  }
                  echo '<div class="listing">';
                  echo '<h3>'.$m[intval($month)].' '.$year.'</h3>'; //set header
                  echo "<table>"; //make table
                  $curr = intval($month);
                }
                echo "<tr><td width='40%'><a href=".$row[2].">".$row[0]."</a></td><td width='50%'>(".$month."/".$day."/".$year.") $row[3]</td><tr>";
              }
            }
            echo '</table><br>'; //close last table
            echo '</div>';  //close last one
          ?>
          <br>
        </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
