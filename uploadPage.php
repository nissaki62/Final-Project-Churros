<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
       <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="login.php">Churros</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="aboutPage.html">About</a></li>
            <li><a href="chartsPage.html">Charts</a></li>
            <li><a href="maps.html">Maps</a></li>
          </ul>
          <form method="POST" action="login.php" class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

     <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="https://i.ytimg.com/vi/Rcp8-7NP06M/maxresdefault.jpg" alt="Churros with chocolate">
            </div>

            <div class="item">
                <img src="http://www.miamitiamo.com/wp-content/uploads/2014/12/Churros.jpg" alt="Who does not like churros??">
            </div>

            <div class="item">
                <img src="https://i.ytimg.com/vi/p3yzix7ud08/maxresdefault.jpg" alt="How can you not like churros?">
            </div>

            <div class="item">
                <img src="https://i.ytimg.com/vi/6J_kr821kd8/maxresdefault.jpg" alt="So beautiful">
            </div>

            <div class="item">
                <img src="https://i.ytimg.com/vi/1_rmlgfBie0/maxresdefault.jpg" alt="So beautiful">
            </div>

            <div class="item">
                <img src="https://i.ytimg.com/vi/jg2lWZNVRU8/maxresdefault.jpg" alt="So beautiful">
            </div>

            <div class="item">
                <img src="https://i.ytimg.com/vi/5bEFE6Mw-fM/maxresdefault.jpg" alt="So beautiful">
            </div>
        </div>

    <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


<div class="container">
  <div class="row">
    <div cass="col-md-12">
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <h4>Select image to upload:</h4>
        <input type="file" name="fileToUpload" id="fileToUpload" >
        <input type="submit" value="Upload Image" name="submit" >
      </form>

    </div>
  </div>
</div>







</body>
</html>






    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    




    Status API Training Shop Blog About
© 2016 Aidanswebsite, Inc. Terms Privacy Security Contact Help
