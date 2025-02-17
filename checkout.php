<!--
  Copyright 2018 Square Inc.
  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at
      http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
-->
<!DOCTYPE html>
<?php
require 'vendor/autoload.php';
// dotenv is used to read from the '.env' file created for credentials
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- link to the SqPaymentForm library -->
    <script type="text/javascript" src="https://js.squareup.com/v2/paymentform">
    </script>
    <!-- link to the local SqPaymentForm initialization -->
    <script type="text/javascript" src="mysqpaymentform.js">
    </script>
    <!-- link to the local custom styles for SqPaymentForm -->
    <link rel="stylesheet" type="text/css" href="mysqpaymentform.css">

    <title>101 Week CSSA - Semaine 101 AESA</title>

    <!-- Bootstrap Core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="/lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/lib/simple-line-icons/css/simple-line-icons.css">

    <!-- Theme CSS -->
    <link href="/css/new-age.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/form-validation.css" rel="stylesheet">
    <script type="text/javascript" src="https://js.squareup.com/v2/paymentform"></script>
    <script type="text/javascript">
     window.applicationId =
         <?php
         echo "\"";
         echo ($_ENV["USE_PROD"] == 'true')  ?  $_ENV["PROD_APP_ID"]
                                             :  $_ENV["SANDBOX_APP_ID"];
         echo "\"";
         ?>;
      window.locationId =
     <?php
        echo "\"";
        echo ($_ENV["USE_PROD"] == 'true')  ?  $_ENV["PROD_LOCATION_ID"]
                                            :  $_ENV["SANDBOX_LOCATION_ID"];
        echo "\"";
      ?>;
      </script>

  	<!-- link to the local SqPaymentForm initialization -->
  	<script type="text/javascript" src="js/sq-payment-form.js"></script>
  	<!-- link to the custom styles for SqPaymentForm -->
  <link rel="stylesheet" type="text/css" href="css/sq-payment-form.css">
  </head>
  <body id="page-top">
      <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
          <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                  </button>
                  <a data-en class="navbar-brand page-scroll" href="#page-top">101 WEEK</a>
                  <a data-fr class="navbar-brand page-scroll" href="#page-top">SEMAINE 101</a>
              </div>
  
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                      <li>
                          <a data-en class="page-scroll" href="#what">101 Week</a>
                          <a data-fr class="page-scroll" href="#what">Semaine 101</a>
                      </li>
                      <li>
                          <a data-en class="page-scroll" href="#the-kit">The Kit</a>
                          <a data-fr class="page-scroll" href="#the-kit">La Trousse</a>
                      </li>
                      <li>
                          <a data-en class="page-scroll" href="#schedule">The Schedule</a>
                          <a data-fr class="page-scroll" href="#schedule">L'horaire</a>
                      </li>
                      <li>
                          <a data-en class="page-scroll" href="#who">Who Are We?</a>
                          <a data-fr class="page-scroll" href="#who">Who Are We?</a>
                      </li>
                      <li>
                          <a data-en class="page-scroll" href="#ticket">Buy the Kit</a>
                          <a data-fr class="page-scroll" href="#ticket">Buy the Kit</a>
                      </li>
                      <li>
                          <a id="lang-button">Français</a>
                      </li>
                  </ul>
              </div>
              <!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->
      </nav>

      <section id="schedule" class="features">
          <div class="container">
            <div class="row mt-5 mb-3">
				      <div class="col-xl-8 mx-auto text-center">
					      <h2 data-en>Register for 101 Week</h2><br>
					      <h2 data-fr>L'horaire</h2><br>
				      </div>
			      </div>
            <div class="row">
            <div class="form-row">
							<div class="form-group col-lg-4">
								<label for="first-name" class="control-label">First Name <span style="color:red;">*</span></label>
								<input type="text" class="form-control" id="first-name" name="first-name" placeholder="" />
							</div>
							<div class="form-group col-lg-4">
								<label for="last-name" class="control-label">Last Name <span style="color:red;">*</span></label>
								<input type="text" class="form-control" id="last-name" name="last-name" placeholder="" />
							</div>
							<div class="form-group col-lg-4">
								<label for="student-num" class="control-label">Student Number <span style="color:red;">*</span></label>
								<input type="number" class="form-control" id="student-num" name="student-num" placeholder="" />
							</div>
						<div>
						<div class="form-row">
							<div class="form-group col-lg-6">
								<label for="email" class="control-label">Email (do not use your uottawa email)<span style="color:red;">*</span></label>
								<input type="email" id="email" class="form-control" name="email" placeholder="" />
							</div>
							<div class="form-group col-lg-6">
								<label for="phone-number" class="control-label">Phone Number <span style="color:red;">*</span></label>
								<input type="tel" class="form-control" id="phone-number" name="phone-number" placeholder="" />
							</div>
						<div>
						<div class="form-row">
							<div class="form-group col-lg-12">
								<label for="diet" class="control-label">If you have any diatery restrictions (allergies, vegetarianism, lactose intolerance, etc.), please list them here:</label>
								<textarea name="diet" id="diet" class="text_area " rows="4" cols="100"></textarea>
							</div>
						<div>
						<div class="form-row">
							<div class="form-group col-lg-12">
								<label for="physical" class="control-label">If you have any physical disabilities or accessibility needs, please list them here:</label>
								<textarea name="physical" id="physical" class="text_area " rows="4" cols="100"></textarea>
							</div>
						<div>
						<div class="form-row">
							<div class="form-group col-lg-12">
								<label for="medication" class="control-label">If you have any physical disabilities or accessibility needs, please list them here:</label>
								<textarea name="medication" id="medication" class="text_area " rows="4" cols="100"></textarea>
								<small style="color: #4E6766;" class="font-italic d-block mb-3">All information provided will be kept confidential between the VP Social and select members of the 101 week team.</small>
							</div>
						<div>
						<br/><hr/>
						<h3 style="color:#5AB1BB">Emergency Contact</h3>
						<div class="form-row">
							<div class="form-group col-lg-4">
								<label for="address" class="control-label"> Your Health Card Number <span style="color:red;">*</span></label>
								<input type="number" class="form-control" name="health-num" id="health-num" placeholder="">
							</div>
							<div class="form-group col-lg-4">
								<label for="input-text" class="control-label">Emergency Contact Full Name <span style="color:red;">*</span></label>
								<input type="text" class="form-control" id="em-name" name="em-name" placeholder="" />
							</div>
							<div class="form-group col-lg-4">
								<label for="input-text" class="control-label">Emergency Phone Number <span style="color:red;">*</span></label>
								<input type="tel" class="form-control" id="em-num" name="em-num" placeholder="" />
							</div>
						<div>
						<br/><hr/>
						<h3 style="color:#5AB1BB">Billing Information</h3>
						<div class="form-row">
							<div class="form-group col-lg-4">
								<label for="b-first-name" class="control-label">First Name <span style="color:red;">*</span></label>
								<input type="text" class="form-control" id="b-first-name" name="b-first-name" placeholder="" />
							</div>
							<div class="form-group col-lg-4">
								<label for="b-last-name" class="control-label">Last Name <span style="color:red;">*</span></label>
								<input type="text" class="form-control" name="b-last-name" id="b-last-name" placeholder="" />
							</div>
							<div class="form-group col-lg-4">
								<label for="b-email" class="control-label">Email <span style="color:red;">*</span></label>
								<input type="email" class="form-control" name="b-email" id="b-email" placeholder="" />
							</div>
						<div>
						<div class="form-row">
							<div class="form-group col-lg-4">
								<label for="b-unit-number" class="control-label">Unit Number (if applicable)</span></label>
								<input type="text" class="form-control" id="b-unit-number" name="b-unit-number" placeholder="" />
							</div>
							<div class="form-group col-lg-4">
								<label for="b-street-address" class="control-label">Street Address<span style="color:red;">*</span></label>
								<input type="text" class="form-control" name="b-street-address" id="b-street-address" placeholder="" />
							</div>
							<div class="form-group col-lg-4">
								<label for="b-postal-code" class="control-label">Postal Code <span style="color:red;">*</span></label>
								<input type="text" class="form-control" name="b-postal-code" id="b-postal-code" placeholder="" />
							</div>
						<div>
						<div class="form-row">
							<div class="form-group col-lg-4">
								<label for="b-country" class="control-label">Country <span style="color:red;">*</span></label>
								<input type="text" class="form-control" id="b-country" name="b-country" placeholder="" />
							</div>
							<div class="form-group col-lg-4">
								<label for="b-province" class="control-label">Province <span style="color:red;">*</span></label>
								<input type="text" class="form-control" name="b-province" id="b-province" placeholder="" />
							</div>
							<div class="form-group col-lg-4">
								<label for="b-city" class="control-label">City <span style="color:red;">*</span></label>
								<input type="text" class="form-control" name="b-city" id="b-city" placeholder="" />
							</div>
						</div>
						<div class ="col-lg-12">
						  <small style="color: #4E6766;" class="font-italic d-block mb-3">We do not keep or store any of this information, payment processing is powered by square .</small>
            </div>
<!-- Begin Payment Form -->
  <div class="sq-payment-form">
    <!--
      Square's JS will automatically hide these buttons if they are unsupported
      by the current device.
    -->
    <div id="sq-walletbox">
      <button id="sq-google-pay" class="button-google-pay"></button>
      <button id="sq-apple-pay" class="sq-apple-pay"></button>
      <button id="sq-masterpass" class="sq-masterpass"></button>
      <div class="sq-wallet-divider">
        <span class="sq-wallet-divider__text">Or</span>
      </div>
    </div>
    <div id="sq-ccbox">
      <!--
        You should replace the action attribute of the form with the path of
        the URL you want to POST the nonce to (for example, "/process-card").
        You need to then make a "Charge" request to Square's transaction API with
        this nonce to securely charge the customer.
        Learn more about how to setup the server component of the payment form here:
        https://docs.connect.squareup.com/payments/transactions/processing-payment-rest
      -->
        <div class="sq-field">
          <label class="sq-label">Card Number</label>
          <div id="sq-card-number"></div>
        </div>
        <div class="sq-field-wrapper">
          <div class="sq-field sq-field--in-wrapper">
            <label class="sq-label">CVV</label>
            <div id="sq-cvv"></div>
          </div>
          <div class="sq-field sq-field--in-wrapper">
            <label class="sq-label">Expiration</label>
            <div id="sq-expiration-date"></div>
          </div>
          <div class="sq-field sq-field--in-wrapper">
            <label class="sq-label">Postal</label>
            <div id="sq-postal-code"></div>
          </div>
        </div>
        <div class="sq-field">
          <button id="sq-creditcard" class="sq-button" onclick="onGetCardNonce(event)">
            Pay $103.00 Now
          </button>
        </div>
        <!--
          After a nonce is generated it will be assigned to this hidden input field.
        -->
        <div id="error"></div>
        <input type="hidden" id="card-nonce" name="nonce">
      </form>
    </div>
  </div>
  <!-- End Payment Form -->
          </div>
                      </div>
                  </div>
              </div>
      </section>
       <footer>
          <div class="container">
              <p data-en>&copy; Computer Science Student Association</p>
              <p data-fr>&copy; Association des Étudiants en Informatique</p>
          </div>
      </footer>
  
      <!-- jQuery -->
      <script src="lib/jquery/jquery.min.js"></script>
  
      <!-- Bootstrap Core JavaScript -->
      <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  
      <!-- Plugin JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  
      <!-- Theme JavaScript -->
      <script src="js/new-age.min.js"></script>
  
      <script>
      $(document).ready(function() {
  
          $('#lang-button').click(function(){
            var lang = $('html').attr('lang');
            if(lang == 'en'){
              $('html').attr('lang','fr');
              $('#lang-button').text("English");
              }
            if(lang == 'fr'){
              $('html').attr('lang','en');
              $('#lang-button').text("Français");
          } 
          });
      });
      </script>
  </body>
</html>
