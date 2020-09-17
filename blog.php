<?php
  session_start();

  if (isset($_SESSION['login'])) {
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
  }
  else{
    header("location:login.php");
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog - The Coffee Valley - Shruti Ikhar</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <!-- jQuery -->
     <script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</head>

<body>

    <div class="brand">The Coffee Valley</div>
    <div class="address-bar">Spine City Mall, Spine Rd | PCNTDA, Moshi |  Pune, Maharashtra 412105 | 123.456.7890</div>

    <!-- Navigation -->
    <?php require_once('nav.php') ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                <h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>
                    <hr>
                    <h2 class="intro-text text-center">The Coffee valley
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/coconut-oil-coffee.jpg" alt="">
                    <h2>Coconut Oil Coffee
                        <br>
                        <small>October 13, 2019</small>
                    </h2>
                    <p>It seems that adding coconut oil to your morning cup of coffee can actually improve your health. Outside of a lasting caffeine boost, coffee itself doesn’t offer up much nutritional value. 
                    However, all of that changes when you put a little coconut oil inside. Not to be confused with the bulletproof coffee trend using organic coffee beans, unsalted butter, and Brain Octane, 
                    this method is a simpler and more cost-effective way to receive more healthful benefits in your morning cup of joe. </p>
                    <button type = "button" class = "btn btn-info btn-lg" data-toggle = "modal" data-target = "#myModal">Read more</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/Irish.jpg" alt="">
                    <h2>Irish Coffee
                        <br>
                        <small>December 04, 2019</small>
                    </h2>
                    <p>Irish coffee (Irish: caife Gaelach) is a cocktail consisting of hot coffee, Irish whiskey, and sugar, stirred, and topped with cream. The coffee is drunk through the cream. 
                    Irish whiskey and at least one level teaspoon of sugar are poured over black coffee and stirred in until fully dissolved. Thick cream is carefully poured over the back of a spoon initially held just above the surface of the coffee and gradually raised a little until the entire layer is floated. </p>
                   <button type = "button" class = "btn btn-info btn-lg" data-toggle = "modal" data-target = "#myModal2">Read more</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/frozen.jpg" alt="">
                    <h2>frozen caramel latte
                        <br>
                        <small>March 25, 2020</small>
                    </h2>
                    <p>This frothy, blended espresso drink will wake you up and make you happy any time of day. Sweetened with caramel sauce and topped with whipped cream, this is one delicious frozen latte. .</p>
                    <button type = "button" class = "btn btn-info btn-lg" data-toggle = "modal" data-target = "#myModal3">Read more</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

<!-- Modal 1 -->
<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Coconut Oil Coffee</h4>
		  </div>
		  <div class="modal-body">
			<p><strong>1. Like Caffeine? Try MTCs:  </strong>
            As coffee lovers, chances are you you can appreciate a nice boost of energy. While coconut oil doesn’t have caffeine the MCTs that we mentioned earlier have actually been shown to boost your energy levels.
             However, they do work a little differently.</p>
             <p> <strong>2. The Weight Loss Power Couple: </strong>
             This is another double whammy of sorts, as both coffee and coconut oil can help boost your weight loss.
            And this particular combination can be more effective than other food or beverage + coconut oil combos. Here’s why:</p>
            <p> <strong>3.  Body Guard from the Inside-Out: </strong>
            That’s right, coconut oil can also help protect you from some seriously bad juju by boosting your immune system. Lauric Acid (aka that good stuff found in breast milk) makes up about 50% of the fatty acids in coconut oil.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>

        <!-- Modal 2 -->
	<div id="myModal2" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Irish Coffee</h4>
		  </div>
		  <div class="modal-body">
			<p>Several places claim to have developed the modern recipe in the 1950s. One version is attributed to a Joe Sheridan, head chef at the restaurant and coffee shop in the Foynes Airbase Flying boat terminal building, County Limerick. In 1942 or 1943 he added whiskey to the coffee of some disembarking passengers. Stanton Delaplane, a travel writer for the San Francisco Chronicle, maintains he brought Irish coffee to the United States after drinking it at Shannon Airport. </p>
           <p> His version is that he worked with the Buena Vista Cafe in San Francisco to start serving it on November 10, 1952., Sheridan later emigrated to work at the Buena Vista Cafe.</p>
            <p>It is also told that the original maker of the now infamous Irish coffee was invented by Joseph Jackson, of Jackson’s hotel Ballybofey county Donegal, who whilst fighting in World War II made the drink in an effort to keep his fellow comrades awake through the night under attack from German soldiers. Following the war he brought the drink that he invented back to Donegal, making the first Irish Coffee. </p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>

<!-- Modal 3 -->
<div id="myModal3" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Frozen Caramel Latte</h4>
		  </div>
		  <div class="modal-body">
			<p>This frothy, blended espresso drink will wake you up and make you happy any time of day. Sweetened with caramel sauce and topped with whipped cream, this is one delicious frozen latte.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; My Coffee Shop Website 2020</p>
                </div>
            </div>
        </div>
    </footer>

   

</body>

</html>

<?php
  
?>