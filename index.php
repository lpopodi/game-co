<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Super Heroins | The real power behind Super Heroes</title>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Add all of your custom CSS to styles.css -->
  <link href="styles.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
  <!-- Add Bootstrap  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
	<!-- Navigation -->
  <?php include ("navigation.php"); ?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <!-- Indicators -->
     <ol class="carousel-indicators">
       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
     </ol>

     <!-- Wrapper for slides -->
     <div class="carousel-inner" role="listbox">
       <div class="item active">
         <img src="images/slideWW.jpg" class="img-responsive" alt="Wonder Woman">
       </div>

       <div class="item">
         <img src="images/slideavailable.jpg" class="img-responsive" alt="Available Now">
       </div>

       <div class="item">
         <img src="images/comingsoon.jpg" class="img-responsive" alt="Coming Soon">
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

	<!-- Content-->
  <div id="availablenow">
    <h2>Available Now</h2>
  </div>
    <div class="cta row">
      <div class="col-sm-3"><img class="imgResize65 center-block" src="images/ww2.png" class="img-responsive" alt="wonder woman" /></div>
      <div class="col-sm-3"><img class="imgResize65 center-block" src="images/supergirl.png" class="img-responsive" alt="super girl" /></div>
      <div class="col-sm-3"><img class="imgResize65 center-block" src="images/emma-frost.png" class="img-responsive" alt="emma frost" /></div>
      <div class="col-sm-3"><img class="imgResize65 center-block" src="images/bat-woman.png" class="img-responsive" alt="bat woman" /></div>
    </div><!-- end row 1 CTA section -->
		<div class="content row">
			<div class="col-sm-4">Created by me because I too am awesome!</div>
			<div class="col-sm-8"><h2>Dedicated to the bad-ass Women Super Heroes</h2>Super Heroins is a New game company dedicated to the real power behind superheroes ... the women! Wonder Woman, Bat Woman, Supergirl, and Emma Frost are already available with many more heroins to follow coming soon!  </div>
		</div><!-- end row 2 middle -->
    <!-- Coming Soon Section -->
    <?php include ("coming-soon.php"); ?>
    <!--Footer Section Here -->
    <?php include ("footer.php"); ?>
	</div><!-- end container div -->
</body>
</html>
