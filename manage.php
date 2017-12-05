<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

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
    </style>

    <body>

      <!-- Navigation -->
      <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="index.html"><img src="imgs/logo.png"> High Hopes </a>
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
                  <a class="dropdown-item" href="nav/about/stories.html">Personal Stories</a>
                  <a class="dropdown-item" href="nav/about/board.html">Board of Directors</a>
                  <a class="dropdown-item" href="nav/about/report.html">Annual Report</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Preschool
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                  <a class="dropdown-item" href="nav/preschool/classrooms.html">Classrooms</a>
                  <a class="dropdown-item" href="nav/preschool/team.html">Meet the Team</a>
                  <a class="dropdown-item" href="nav/preschool/parents.html">Preschool Parents</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pediatric Therapy
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                    <a class="dropdown-item" href="nav/therapy/physicaltherapy.html">Physical Therapy</a>
                    <a class="dropdown-item" href="nav/therapy/occupationaltherapy.html">Occupational Therapy</a>
                    <a class="dropdown-item" href="nav/therapy/speechpathology.html">Speech Pathology</a>
                    <a class="dropdown-item" href="nav/therapy/feedtherapy.html">Feeding Therapy</a>
                    <a class="dropdown-item" href="nav/therapy/otherservice.html">Other Therapy Services</a>
                    <a class="dropdown-item" href="nav/therapy/clinic.html">High Hopes Clinic</a>
                    <a class="dropdown-item" href="nav/therapy/therapy.html">Therapy Payments</a>
                    <a class="dropdown-item" href="nav/therapy/team.html">Meet Therapy Team</a>
                    <a class="dropdown-item" href="nav/therapy/physicians.html">For Physicians</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="nav/events.php">News and Events</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Ways to Give
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                  <a class="dropdown-item" href="nav/give/apparel.html">High Hopes Apparel</a>
                  <a class="dropdown-item" href="nav/give/donate.html">Donate</a>
                  <a class="dropdown-item" href="nav/give/involve.html">Get Involved</a>
                  <a class="dropdown-item" href="nav/give/wish.html">Wish List</a>
                  <a class="dropdown-item" href="nav/give/campaign.html">Capital Campaign Share</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="nav/connect/resources.html">Tips and Resources</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Contact
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                  <a class="dropdown-item" href="nav/contact/contact.html">Contact Us</a>
                  <a class="dropdown-item" href="nav/contact/schedule.html">Schedule New Patient</a>
                  <a class="dropdown-item" href="nav/contact/volunteer.html">Volunteers</a>
                  <a class="dropdown-item" href="nav/contact/employment.html">Employment</a>
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

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Website Management</h1>
      <br>
      <div class="row">
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <div class="card-body">
              <p class="card-text">
                <h4>Add new Event page</h4>
                <form action="newEvent.php" method="post">
                  <div class="form-group">
                    <label for="EventName">Event Name</label>
                    <input type="text" class="form-control" id="EventName" name="EventName">
                  </div>

                  <div class="form-group">
                    <label for="EventLink">Link to Page</label>
                    <input type="text" class="form-control" id="EventLink" name="EventLink">
                  </div>

                  <div class="form-group">
                    <label for="EventDate">Event Date</label>
                    <input type="date" class="form-control" id="EventDate" name="EventDate" placeholder="Please do not use IE.  The date input is a specific format">
                  </div>

                  <div class="form-group">
                    <label for="EventTime">Event Time</label>
                    <input type="text" class="form-control" id="EventTime" name="EventTime" placeholder="HH:MM">
                  </div>
                  <button type="submit" class="btn btn-primary">Add Event</button>
                </form>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <div class="card-body">
              <p class="card-text">
                <h4>Add New Employee</h4>
                <form action="newEmployee.php" method="post">
                  <div class="form-group">
                    <label for="Name">Full Name</label>
                    <input type="text" class="form-control" id="Name" name="Name">
                  </div>

                  <div class="form-group">
                    <label for="Position">Position</label>
                    <input type="text" class="form-control" id="Position" name="Position">
                  </div>

                  <div class="form-group">
                    <label for="Phone">Phone Number</label>
                    <input type="text" class="form-control" id="Phone" name="Phone">
                  </div>

                  <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" id="Email" name="Email">
                  </div>

                  <div class="form-group">
                    <label for="Description">Employee Description</label>
                    <textarea class="form-control" id="Description" rows="3"></textarea>
                  </div>

                  <button type="submit" class="btn btn-primary">Add Employee</button>
                </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <div class="card-body">
              <p class="card-text">
                <?php
                  $db = mysqli_connect('localhost','root','toor','highhopes');
                  $query = "SELECT `Phone Number` FROM volunteer WHERE 1";
                  $result = mysqli_query($db, $query);
                  $list = "";
                  $first = True;
                  while($row = mysqli_fetch_row($result)){
                    if($first){
                      $list .= "+".$row[0];
                      $first = !$first;
                    }
                    else{
                      $list .= ",+".$row[0];
                    }
                  }
                  echo '<h4><a href="sms://'.$list.'">Send text message to volunteers</a></h4>';
                ?>
            </div>
          </div>
        </div>



    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <div style="float: right;">
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="2957CZ8XLDFN6">
            <input type="image" width="100%" height="100%" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
        </div>
        <p class="m-0 text-center text-white">Copyright &copy; The Gooey Narwhals</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
