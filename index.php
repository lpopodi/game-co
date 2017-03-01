<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Wonder Woman Video Game</title>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Add all of your custom CSS to styles.css -->
  <link href="styles.css" rel="stylesheet">
  <!-- Add Bootstrap  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
	<!-- Navigation -->
  <?php include ("navigation.php"); ?>

	<!-- Slider Section -->
  <div class="container">

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
         <img src="images/slide1.jpg" class="img-responsive" alt="Slide 1">
       </div>

       <div class="item">
         <img src="images/slide2.jpg" class="img-responsive" alt="Slide 2">
       </div>

       <div class="item">
         <img src="images/slide3.jpg" class="img-responsive" alt="Slide 3">
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
    <div class="cta row">
      <div class="col-sm-3"><img class="imgResize65 center-block" src="images/ww1.png" class="img-responsive" alt="ww1" /></div>
      <div class="col-sm-3"><img class="imgResize65 center-block" src="images/ww2.png" class="img-responsive" alt="ww2" /></div>
      <div class="col-sm-3"><img class="imgResize65 center-block" src="images/ww3.png" class="img-responsive" alt="ww3" /></div>
      <div class="col-sm-3"><img class="imgResize65 center-block" src="images/ww4.png" class="img-responsive" alt="ww4" /></div>
    </div><!-- end row 1 CTA section -->
		<div class="content row">
			<div class="col-sm-4">Lorem ipsum dolor sit amet, putant albucius scaevola et eam, nam ceteros recteque at. Ius sint facer docendi ad, detraxit pertinacia ad sea, nam labore lucilius ei. An primis aliquip intellegebat mel, aliquip deserunt concludaturque te nam. Odio ceteros prodesset ei pri. Ei fastidii adipiscing eos, pertinax electram elaboraret has eu, ea est altera mollis reprehendunt. In sea menandri reprehendunt, te vix decore fastidii.Eam eu complectitur disputationi, eos eu delicata imperdiet, ut sit erat tritani antiopam. No sea dicat numquam disputando, quando disputationi sit an, mel ne suas invenire. Graeco dolorem ea vis. Ne dico splendide usu.</div>
			<div class="col-sm-8">Lorem ipsum dolor sit amet, putant albucius scaevola et eam, nam ceteros recteque at. Ius sint facer docendi ad, detraxit pertinacia ad sea, nam labore lucilius ei. An primis aliquip intellegebat mel, aliquip deserunt concludaturque te nam. Odio ceteros prodesset ei pri. Ei fastidii adipiscing eos, pertinax electram elaboraret has eu, ea est altera mollis reprehendunt. In sea menandri reprehendunt, te vix decore fastidii.Eam eu complectitur disputationi, eos eu delicata imperdiet, ut sit erat tritani antiopam. No sea dicat numquam disputando, quando disputationi sit an, mel ne suas invenire. Graeco dolorem ea vis. Ne dico splendide usu.</div>
		</div><!-- end row 2 middle -->
    <!--Footer Section Here -->
    <?php include ("footer.php"); ?>
	</div><!-- end container div -->
</body>
</html>
