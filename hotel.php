<?php 
	include 'layout/header.php';


?>
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_5.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Hotel</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hotels</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
        	<div class="col-lg-3 sidebar">
        		<div class="sidebar-wrap bg-light ftco-animate">
        			<h3 class="heading mb-4">Find City</h3>
        			<form method="post">
        				<div class="fields">
		             
		              <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="selectValue" id="" class="form-control" placeholder="Keyword search">
	                    	 <option value="">Select Location</option>
	                    	<?php 
	                    	$loc;
	                      			$sql = "SELECT `Hotel_CITY` from hotel";
	                      			$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
    // output data of each row
    									while($row = mysqli_fetch_assoc($result)) {?>
	                     
	                      <option>
	                      	
	                      		<?php
        								echo $loc = $row['Hotel_CITY'];
									    }
									}	

											


	                      		?>



	                      </option>
	                    </select>
	                  </div>
		              </div>
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control" placeholder="Date from">
		              </div>
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control" placeholder="Date to">
		              </div>
		             
		              <div class="form-group">
		              	
		                <input type="submit" name="submitbtn" value="Search" class="btn btn-primary py-3 px-5">
		              </div>
		            </div>
	            </form>
        		</div>
        	
          </div>
<?php 

	
	                      			$sql = "SELECT * from hotel";
	                      			$result = mysqli_query($conn, $sql);

									?>

          <div class="col-lg-9">
          	<div class="row">
          	
		    			<?php 
		    				if (mysqli_num_rows($result) > 0) {
										while($row = mysqli_fetch_assoc($result)) {
										

		    			?>
		    			<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="hotel-single.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo $row['picupload']; ?>);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="<?php echo $row['hotellink']; ?>"><?php echo $row['Hotel_NAME']; ?></a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>8 Rating</span>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price per-price"><?php echo 'Rs.' .  $row['HotelPrice']; ?><br><small>/night</small></span>
		    							</div>
		    						</div>
		    						<p><?php echo $row['Hotel_insight']; ?></p>
		    						
		    					</div>
		    				</div>
		    			</div>
		    			<?php 
		    				}}
		    			?>
          	</div>
          	
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->
<?php 
	include 'layout/footer.php';


?>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>



<?php 

	if (isset($_POST['submitbtn'])) {
		$location = $_POST['selectValue'];
		

	}

?>