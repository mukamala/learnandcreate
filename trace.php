<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Web design master class">
  <meta name="keywords" content="HTML,CSS,PHP,NDOLA,master class,JavaScript,bootstrap">
  <meta name="author" content="Mukamala">
  <link rel="shortcut icon" type="image/gif" href="img/logox.gif"/>

  <title>Learn & Create</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">

  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #929FBA !important;
      }
    }

  </style>
</head>

<body >    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3">
                        
                    </script>

  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" style="padding:0">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="" target="_blank">
          <img src="img/lclogo3.png" width="130px"/>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            
            <li class="nav-item">
              <button type="button" class="btn btn-purple btn-sm" data-toggle="modal" data-target="#basicExampleModal"><i class="fas fa-info-circle pr-2" aria-hidden="true"></i>About us</button>
            </li>
            <li class="nav-item">
              <button type="button" class="btn btn-pink btn-sm" data-toggle="modal" data-target="#basicExampleModal2"><i class="fas fa-hand-holding-usd pr-2" aria-hidden="true"></i>Free stuff</button>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
                <div class="fb-share-button nav-link" data-href="https://learnandcreate.000webhostapp.com" data-layout="button_count" data-size="small">Share with friends<i class="far fa-hand-point-right"></i>&nbsp <a target="_blank"
                        			  href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Flearnandcreate.000webhostapp.com%2F&amp;src=sdkpreparse" 
                        			  class="fb-xfbml-parse-ignore"><i class="fab fa-facebook fa-2x"></i></a></div>
            </li>
            
          </ul>

        </div>

      </div>
    </nav>
	
	<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Our purpose & vision</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="lead">The purpose for this master class is to equip individuals 
					with international recognised skills in hope that one individual will 
					use it to improve there life or even better provide 
				a solution in zambia Thereof creating a pillar that supports the economy of the nation.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="basicExampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Free learning material</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="lead"><i class="far fa-hand-point-right"></i>&nbsp <a href="https://mdbootstrap.com/education/bootstrap/.">Material Design Bootstrap tutorials <a/></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Master class sign up</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="form3" name="names" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form3" required>Your full names</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="form2" name="email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form2">Your email</label>
        </div>
		<div class="md-form mb-5">
          <i class="fas fa-mobile-alt prefix grey-text"></i>
          <input type="phone" id="form5" name="number" class="form-control validate" required>
          <label data-error="wrong" data-success="right" for="form5"> Your cellphone number</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-indigo">Done <i class="far fa-check-circle"></i></button>
      </div>
    </div>
  </div>
</div>


    <!-- Navbar -->

    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
          <div class="view" style="background-image: url('img/learn.jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
			  			  <?php
if (isset($_POST['submit'])) {

}
$name = $_POST["names"];
$phone_number = $_POST["number"];
$email = $_POST["email"];


// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/twilio-php-master/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC8784baca4f03279175cb7ec4be9be421';
$token = '3afc102116cd5cbf5f46aa0c8c007554';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+260964186808',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+12029151556',
        // the body of the text message you'd like to send
        'body' => "Master class sign up \n Full names : $name \n Email: $email Phone_number: $phone_number  "
    )
);

echo "<div class='text-center white-text mx-5 wow fadeIn'><h1 class='mb-4'>
                  <strong>Registration done <i class='fas fa-check'></i> </strong>
                You will be contacted by representative on <br/> <i class='fab fa-whatsapp'><a href='tel:0964186808'> 0964186808</a></i> </h1></div>";
?>
<p >
      
            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
        <!--/First slide-->

        <!--Second slide-->
        <div class="carousel-item">
          <div class="view" style="background-image: url('img/learn4.jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
                  <strong>Learn for your business</strong>
                </h1>

            
                <p >
                  <strong>Create your own, stunning website for your business.</strong>
                </p>

               <button type="button" class="btn btn-rounded unique-color" data-toggle="modal" data-target="#modalSubscriptionForm">
				<i class="fas fa-user-plus pr-2" aria-hidden="true"></i>Sign up now</button>
              </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
        <!--/Second slide-->

        <!--Third slide-->
        <div class="carousel-item">
          <div class="view" style="background-image: url('img/learn2.jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
                     <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
                  <strong>Web design master class</strong>
                </h1>

                <p>
                  <strong>A 4 weeks comprehensive web design Master class</strong>
                </p>

                <p >
                  <strong>At the end of this package you will launch your own personal website for the world to see.</strong>
                </p>
				
				<button type="button" class="btn btn-rounded unique-color" data-toggle="modal" data-target="#modalSubscriptionForm">
				<i class="fas fa-user-plus pr-2" aria-hidden="true"></i>Sign up now</button>
				
              </div>
              <!-- Content -->

              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
        <!--/Third slide-->

      </div>
      <!--/.Slides-->

      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->

    </div>
    <!--/.Carousel Wrapper-->

  </header>

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="tel:0964186808" target="_blank"
        role="button">Call now
        <i class="fas fa-mobile-alt"></i>
      </a>
      <a class="btn btn-outline-white" href="" target="_blank" role="button" data-toggle="modal" data-target="#modalSubscriptionForm">Sign up now
        <i class="fas fa-user-plus"></i>
      </a>
	  
    </div>
    <!--/.Call to action-->
<br/>
    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="mukamala.thinkmeit.com" target="_blank">Mukamala.com </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
