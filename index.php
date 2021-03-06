<!DOCTYPE html>
<html>
<head>
	<title>Arcitell</title>

	<!-- META -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

	<!-- FONTS -->
	<style>
		@import url('https://fonts.googleapis.com/css?family=Raleway:300,400,500,700,900');
		@import url('https://fonts.googleapis.com/css?family=Days+One');
	</style> 

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/flexboxgrid.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootsnav.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom-style.css">

</head>
<body>
	<header>
		<div class="container">
			<img src="images/bw-logo.png">
		</div>
	</header>
	<!-- Modal -->
	<div id="videoModal" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-lg">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>
	      <div class="modal-body">
	        <video controls >
			  <!-- <source src="video/ArcitellIsComing.mp4" type="video/mp4"> -->
			  <source src="video/Arcitell-Is-Coming.ogg" type="video/ogg">
			  Your browser does not support HTML5 video.
			</video>
	      </div>
	    </div>

	  </div>
	</div>

	<!-- Modal -->
	<div id="contactModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header text-center">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h3 class="modal-title">Contact Us</h3>
	      </div>
	      <form id="contact_us_frm" action="javascript:void(0);" method="POST">
	      	<div class="modal-body">
	        
	        	<div class="form-group">
        			<label>Full name</label>
        			<input class="form-control" type="text" id="full_name" name="full_name" required>
        			
        		</div>
        		<div class="form-group">
        			<label>Email</label>
        			<input class="form-control" type="text" id="email_id" name="email_id" required>
        			
        		</div>
        		<div class="form-group">
        			<label>Phone</label>
        			<input class="form-control" type="text" id="phone_number" name="phone_number" required>
        			
        		</div>
        		<div class="form-group">
        			<label>Message</label>
        			<textarea class="form-control" type="text" id="message" name="message" required></textarea>
        			
        		</div>
        	</div>
        	<div class="modal-footer">
		      	<button class="btn btn-success" type="submit">Submit</button>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		    </div>
	      </form>
	      
	      
	    </div>

	  </div>
	</div>


	<div class="banner">
		<div class="container">
			<div class="outer">
				<div class="inner">
					<a href="https://qoracladding.com/">
					<img src="images/qora-logo.png" class="logo img-responsive">
					</a>
					<div class="head">
					<font face="arial black" color="#652121" size="6px"><strong>Trade Up Without Any Trade-Offs</strong></font>
					<br />
					<br />
					<font face="arial" color="#652121" size="4px">Indistinguishable from brick, cedar, and stone to the naked eye.</font>
					<br />
					<font face="arial" color="#652121" size="4px">Incomparable in overall quality, workability, protection, and value.</font>
					<br />
					<br />
					<font face="arial black" color="#652121" size="3px">Get an edge on your competition with Qora.</font>
					</div>
					<button type="button" class="button" href="" data-toggle="modal" data-target="#contactModal">STAY INFORMED</button>
					<br />
					
					<!--<button type="button" data-toggle="modal" data-target="#videoModal"><img src="images/play.png"></button>-->
				</div>
				<div class="other">
					<img src="images/qora-materials.png" class="materials">
					<br />
					<!--<button type="button" class="video" data-toggle="modal" data-target="#videoModal"><img src="images/video-poster.png"></button>-->
					<iframe class ="video" width="985" height="475" 
						src="video/Arcitell-Is-Coming.ogg">
					</iframe>
				</div>
			</div>
			<!--<div class="social">
			<ul>
					<li><a target="blank" href="https://twitter.com/arcitell"><img src="images/8.png"></a></li>
					
					<li><a target="blank" href="https://www.facebook.com/Arcitell-1998083503554188/"><img src="images/7.png"></a></li>
					<li><a target="blank" href="https://www.instagram.com/arcitell/"><img src="images/1.png"></a></li>

					<li><a target="blank" href="https://www.linkedin.com/company/10005238/"><img src="images/6.png"></a></li>

					<li><a target="blank" href="https://www.flickr.com/photos/152594000@N05/"><img src="images/2.png"></a></li>

					<li><a target="blank" href="https://www.youtube.com/channel/UCcHYiB_d869UuzLYmo-wAEg?view_as=subscriber"><img src="images/5.png"></a></li>
					<!--<li><a target="blank" href=""><img src="images/4.png"></a></li>-->

					<!-- <li><a href="" data-toggle="modal" data-target="#contactModal"><img src="images/3.png"></a></li> 
				</ul>
			</div> -->
		</div>
	</div>
	<footer>
		<div class="container">
			<p>© 2013-<?php echo date('Y') ?> Arcitell. All rights reserved. </p>
			<ul>
					<li><a target="blank" href="https://twitter.com/arcitell"><img src="images/8.png"></a></li>
					
					<li><a target="blank" href="https://www.facebook.com/Arcitell-1998083503554188/"><img src="images/7.png"></a></li>
					<li><a target="blank" href="https://www.instagram.com/arcitell/"><img src="images/1.png"></a></li>

					<li><a target="blank" href="https://www.linkedin.com/company/10005238/"><img src="images/6.png"></a></li>

					<li><a target="blank" href="https://www.flickr.com/photos/152594000@N05/"><img src="images/2.png"></a></li>

					<li><a target="blank" href="https://www.youtube.com/channel/UCcHYiB_d869UuzLYmo-wAEg?view_as=subscriber"><img src="images/5.png"></a></li>
					<!--<li><a target="blank" href=""><img src="images/4.png"></a></li>-->

					<!-- <li><a href="" data-toggle="modal" data-target="#contactModal"><img src="images/3.png"></a></li> -->
				</ul>
		</div>
	</footer>
	<?php
            $base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
            $base_url .= "://" . $_SERVER['HTTP_HOST'];
            $base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
            ?>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootsnav.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.matchHeight.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script>
$("#contact_us_frm").submit(function () {
                $.ajax({
                    url: "<?php echo $base_url ?>php/contact_us.php",
                    dataType: "json",
                    data: $("#contact_us_frm").serialize(),
                    type: "post",
                    success: function (data) {
                        if (data.error == '')
                            alert(data.message);
                        $("#contact_us_frm")[0].reset();
												$("#contactModal").modal('hide');
                    }
                })
            })
</script>
</body>
</html>
