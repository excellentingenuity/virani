<?php

	//send contact form by email
	if (isset($_GET['action']) == "send") { //message formatting
		$message = "
		<html>
		<head>
			<title>Contact Form Email</title>
		</head>
			<body>
				<ul>
					<li>Name: ".$_POST['name']."</li>
					<li>Email: ".$_POST['email']."</li>
					<li>Phone: ".$_POST['phone']."</li>
					<li>Message: ".$_POST['message']."</li>
				</ul>
			</body>
		</html>";
		
	//end message formatting
	//set headers
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		if (mail("james.johnson@excellentingenuity.com", "Contact Form Email", $message, $headers)==1){
			$show = true;
			$modal = "<script>$('#confirmation').modal('show')</script>";
			//"Mail has been sent";
		} else {
			echo "Mail did not send";	
		}
	}
?>
<!DOCTYPE HTML>
<html>
<head>

<!-- Page designed and coded by James Johnson 2012 under contract for ERF Marketing -->


<meta charset="utf-8">
<title>About Us - Virani Custom Homes</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="bootstrap/css/bootstrap.css" rel="stylesheet" >
<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<link rel="stylesheet" media="screen" href="css/phone.css">
<link rel="stylesheet" media="screen and (min-width: 330px) and (max-width: 590px)" href="css/phone-hz.css"> 
<link rel="stylesheet" media="screen and (min-width: 600px) and (max-width: 800px)" href="css/tablet.css">
<link rel="stylesheet" media="screen and (min-width: 801px) and (max-width: 1280px)" href="css/desktop.css">
<link rel="stylesheet" media="screen and (min-width: 1280px)" href="css/widescreen.css">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--javascript includes -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="assets/js/bootstrap-transition.js"></script>
  <script src="assets/js/bootstrap-button.js"></script>
  <script src="assets/js/bootstrap-alert.js"></script>
  <script src="assets/js/bootstrap-modal.js"></script>
  <script src="assets/js/bootstrap-dropdown.js"></script>
  <script src="assets/js/bootstrap-tab.js"></script>

<!-- insert google analytics code here-->

</head>

<body>
    <div class="container">
      <div id="header">
          <div class="row">
              <div class="span5 offset1" id="header_logo">
                  <a href="#" ><img class="header_logo" src="img/logo.png" alt="Virani Custom Homes" /></a>
              </div>              
              <div class="span2 offset3 visible-tablet" id="phone_top">
              		<p class="phone_num visible-tablet">
                    	<b>864.346.0598</b>
                    </p>
                    <p class="phone_num visible-tablet">
                    	<b>864.787.5296</b>
                    </p>
              </div>
              <div class="span2 offset5 visible-desktop" id="phone_top">
              		<p class="phone_num visible-desktop">
                    	<b>864.346.0598</b>
                    </p>
                    <p class="phone_num visible-desktop">
                    	<b>864.787.5296</b>
                    </p>
              </div>
          </div>
            <div class="nav_container">      
              <div class="row" id="nav_row">
                <div class="span10 offset1" id="nav_span">
                    <div class="nav visible-phone" id="nav_menu">
                        <ul class="nav nav-pills nav-stacked" id="top_nav">
                            <li><a id="button_navs" href="index.html"><i class="icon-home icon-white"></i>&nbsp;Home</a></li>
                            <li><a id="button_navs" href="about.html">About Us</a></li>
                            <li><a id="button_navs" href="for_sale.html">For Sale</a></li>
                            <li><a id="button_navs" href="gallery.html">Gallery of Homes</a></li>
                            <li class="active"><a id="button_navs_active" href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="nav visible-tablet" id="nav_menu">
                        <ul class="nav nav-pills nav-stacked" id="top_nav">
                            <li><a id="button_navs" href="index.html"><i class="icon-home icon-white"></i>&nbsp;Home</a></li>
                            <li><a id="button_navs" href="about.html">About Us</a></li>
                            <li><a id="button_navs" href="for_sale.html">For Sale</a></li>
                            <li><a id="button_navs" href="gallery.html">Gallery of Homes</a></li>
                            <li class="active"><a id="button_navs_last_active" href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="nav visible-desktop" id="nav_menu">
                        <ul class="nav nav-pills" id="top_nav">
                            <li><a id="button_navs" href="index.html"><i class="icon-home icon-white"></i>&nbsp;Home</a></li>
                            <li><a id="button_navs" href="about.html">About Us</a></li>
                            <li><a id="button_navs" href="for_sale.html">For Sale</a></li>
                            <li><a id="button_navs" href="gallery.html">Gallery of Homes</a></li>
                            <li class="active"><a id="button_navs_active" href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div> 
            </div>
        </div>
      </div>
	</div>
    <div class="modal hide fade" id="confirmation">
    	<div class="modal-header">
        	<button class="close" data-dismiss="modal">x</button>
            <h3>Thank you</h3>
        </div>
        <div class="modal-body">
        	<p class="confirmation">
            	Thank you for contacting us we will reply shortly.
            </p>
        </div>
       	<div class="modal-footer">
        	<a href="#" class="btn btn-primary" data-dismiss="modal" id="confirmation_close">Close</a>
        </div>
    </div>
    <div class="container" id="contact_container">
    	<div class="row">
           <div class="span5 offset1 visible-tablet" id="contact_span">
                <div class="my_contact visible-tablet">
                <form id="contact_form" class="form-verical" method="post" action="contact.php?action=send"> 
                    <fieldset>
                        <legend id="contact_form_para">Contact Us <br />
                        <small id="contact_small">All fields are Required</small>
                        </legend>
                        <div class="control-group">
                            <label class="control-label" for="name">Name:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="name" id="name" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="email">Email:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="email" id="email" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="phone">Phone:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="phone" id="phone" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="message">Message:</label>
                            <div class="controls">
                                <textarea class="input-xlarge" name="message" id="message" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="form-actions" id="form_button_group">
                            <button type="submit" id="form_submit" class="btn btn-primary btn-large">Submit</button>
                            <button type="reset" id="form_cancel" class="btn btn-large">Cancel</button>
                        </div>
                    </fieldset>
                </form>
                </div>
            </div>
            <div class="span4 offset1 visible-desktop" id="contact_span">
                <div class="my_contact visible-desktop">
                <form id="contact_form" class="form-verical" method="post" action="contact.php?action=send"> 
                    <fieldset>
                        <legend id="contact_form_para">Contact Us <br />
                        <small id="contact_small">All fields are Required</small>
                        </legend>
                        <div class="control-group">
                            <label class="control-label" for="name">Name:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="name" id="name" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="email">Email:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="email" id="email" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="phone">Phone:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="phone" id="phone" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="message">Message:</label>
                            <div class="controls">
                                <textarea class="input-xlarge" name="message" id="message" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="form-actions" id="form_button_group">
                            <button type="submit" id="form_submit" class="btn btn-primary btn-large">Submit</button>
                            <button type="reset" id="form_cancel" class="btn btn-large">Cancel</button>
                        </div>
                    </fieldset>
                </form>
                </div>
            </div>            
            <div class="span4 offset1 visible-phone" id="contact_span">
                <div class="my_contact visible-phone">
                <form id="contact_form" class="form-verical" method="post" action="contact.php?action=send"> 
                    <fieldset>
                        <legend id="contact_form_para">Contact Us <br />
                        <small id="contact_small">All fields are Required</small>
                        </legend>
                        <div class="control-group">
                            <label class="control-label" for="name">Name:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="name" id="name" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="email">Email:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="email" id="email" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="phone">Phone:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="phone" id="phone" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="message">Message:</label>
                            <div class="controls">
                                <textarea class="input-xlarge" name="message" id="message" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="form-actions" id="form_button_group">
                            <button type="submit" id="form_submit" class="btn btn-primary btn-large">Submit</button>
                            <button type="reset" id="form_cancel" class="btn btn-large">Cancel</button>
                        </div>
                    </fieldset>
                </form>
                </div>
            </div>
            <div class="span6" id="map_container">
            	<div class="visible-desktop thumbnail">
                	<iframe width="560" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=516+Horton+Grove+Road,+Greer,+SC&amp;aq=1&amp;oq=516+Horton+Grove&amp;sll=37.0625,-95.677068&amp;sspn=49.490703,93.076172&amp;ie=UTF8&amp;hq=&amp;hnear=516+Horton+Grove+Rd,+Greer,+South+Carolina+29651&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                </div>
                <div class="span5 visible-tablet thumbnail">
                	<iframe width="290" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=516+Horton+Grove+Road,+Greer,+SC&amp;aq=1&amp;oq=516+Horton+Grove&amp;sll=37.0625,-95.677068&amp;sspn=49.490703,93.076172&amp;ie=UTF8&amp;hq=&amp;hnear=516+Horton+Grove+Rd,+Greer,+South+Carolina+29651&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                </div>
                <div class="visible-phone thumbnail">
                	<iframe id="mobile_map" width="270" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=516+Horton+Grove+Road,+Greer,+SC&amp;aq=1&amp;oq=516+Horton+Grove&amp;sll=37.0625,-95.677068&amp;sspn=49.490703,93.076172&amp;ie=UTF8&amp;hq=&amp;hnear=516+Horton+Grove+Rd,+Greer,+South+Carolina+29651&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                </div>
            </div>
		</div>
      <div class="row">

      </div>
  </div>
         <div class="row">
           <div id="footer">
              <p class="phone_num_b visible-phone">
                  <b>864.346.0598</b>
              </p>
              <p class="phone_num_b visible-phone">
                  <b>864.787.5296</b>
              </p>
             <p id="copyright"> Copyright 2012<br />
              Virani Custom Homes</p><br />
           </div>
         </div>
   	</div>
 </div>
<?php
	if (show == true){
		echo $modal;
	}
?>
</body>
</html>
