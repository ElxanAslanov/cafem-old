<?php $this->load->view('includes/header') ?>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Slider
================================================== -->
<div class="listing-slider mfp-gallery-container margin-bottom-0">
	<a href="<?php echo base_url('public/assets/') ?>images/single-listing-01.jpg" data-background-image="images/single-listing-01.jpg" class="item mfp-gallery" title="Title 1"></a>
	<a href="<?php echo base_url('public/assets/') ?>images/single-listing-02.jpg" data-background-image="images/single-listing-02.jpg" class="item mfp-gallery" title="Title 3"></a>
	<a href="<?php echo base_url('public/assets/') ?>images/single-listing-03.jpg" data-background-image="images/single-listing-03.jpg" class="item mfp-gallery" title="Title 2"></a>
	<a href="<?php echo base_url('public/assets/') ?>images/single-listing-04.jpg" data-background-image="images/single-listing-04.jpg" class="item mfp-gallery" title="Title 4"></a>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row sticky-wrapper">
		<div class="col-lg-8 col-md-8 padding-right-30">

			<!-- Titlebar -->
			<div id="titlebar" class="listing-titlebar">
				<div class="listing-titlebar-title">
					<h2><?php echo $cafe['name'] ?> <span class="listing-tag">Eat & Drink</span></h2>
					<span>
						<a href="#listing-location" class="listing-address">
							<i class="fa fa-map-marker"></i>
							2726 Shinn Street, New York
						</a>
					</span>
					<div class="star-rating" data-rating="5">
						<div class="rating-counter"><a href="#listing-reviews">(31 reviews)</a></div>
					</div>
				</div>
			</div>

			<!-- Listing Nav -->
			<div id="listing-nav" class="listing-nav-container">
				<ul class="listing-nav">
					<li><a href="#listing-overview" class="active">Overview</a></li>
					<li><a href="#listing-pricing-list">Pricing</a></li>
					<li><a href="#listing-location">Location</a></li>

				</ul>
			</div>
			
			<!-- Overview -->
			<div id="listing-overview" class="listing-section">

				<!-- Description -->

				<p>
					şş
				</p>

				<p>
					..
				</p>
				
				
				<!-- Listing Contacts -->
				<div class="listing-links-container">

					<ul class="listing-links contact-links">
						<li><a href="tel:12-345-678" class="listing-links"><i class="fa fa-phone"></i> +12 345 6578</a></li>
						<li><a href="http://www.vasterad.com/cdn-cgi/l/email-protection#5c313d35301c39243d312c3039723f3331" class="listing-links"><i class="fa fa-envelope-o"></i> <span class="__cf_email__" data-cfemail="5d303c34311d38253c302d3138733e3230">[email&#160;protected]</span></a>
						</li>
						<li><a href="#" target="_blank"  class="listing-links"><i class="fa fa-link"></i> www.example.com</a></li>
					</ul>
					<div class="clearfix"></div>

					<ul class="listing-links">
						<li><a href="#" target="_blank" class="listing-links-fb"><i class="fa fa-facebook-square"></i> Facebook</a></li>
						<li><a href="#" target="_blank" class="listing-links-yt"><i class="fa fa-youtube-play"></i> YouTube</a></li>
						<li><a href="#" target="_blank" class="listing-links-ig"><i class="fa fa-instagram"></i> Instagram</a></li>
						<li><a href="#" target="_blank" class="listing-links-tt"><i class="fa fa-twitter"></i> Twitter</a></li>
					</ul>
					<div class="clearfix"></div>

				</div>
				<div class="clearfix"></div>


				<!-- Amenities -->
				<h3 class="listing-desc-headline">Amenities</h3>
				<ul class="listing-features checkboxes margin-top-0">
					<li>Elevator in building</li>
					<li>Friendly workspace</li>
					<li>Instant Book</li>
					<li>Wireless Internet</li>
					<li>Free parking on premises</li>
					<li>Free parking on street</li>
				</ul>
			</div>


			<!-- Food Menu -->
			<div id="listing-pricing-list" class="listing-section">
				<h3 class="listing-desc-headline margin-top-70 margin-bottom-30">Pricing</h3>

				<div class="show-more">
					<div class="pricing-list-container">
						
						<!-- Food List -->
						<h4>Burgers</h4>
						<ul>
							<li>
								<h5>Classic Burger</h5>
								<p>Beef, salad, mayonnaise, spicey relish, cheese</p>
								<span>$6</span>
							</li>
							<li>
								<h5>Cheddar Burger</h5>
								<p>Cheddar cheese, lettuce, tomato, onion, dill pickles</p>
								<span>$6</span>
							</li>
							<li>
								<h5>Veggie Burger</h5>
								<p>Panko crumbed and fried, grilled peppers and mushroom</p>
								<span>$6</span>
							</li>
							<li>
								<h5>Chicken Burger</h5>
								<p>Cheese, chicken fillet, avocado, bacon, tomatoes, basil</p>
								<span>$6</span>
							</li>
						</ul>

						<!-- Food List -->
						<h4>Drinks</h4>
						<ul>
							<li>
								<h5>Frozen Shake</h5>
								<span>$4</span>
							</li>
							<li>
								<h5>Orange Juice</h5>
								<span>$4</span>
							</li>
							<li>
								<h5>Beer</h5>
								<span>$4</span>
							</li>
							<li>
								<h5>Water</h5>
								<span>Free</span>
							</li>
						</ul>

					</div>
				</div>
				<a href="#" class="show-more-button" data-more-title="Show More" data-less-title="Show Less"><i class="fa fa-angle-down"></i></a>
			</div>
			<!-- Food Menu / End -->

		
			<!-- Location -->
			<div id="listing-location" class="listing-section">
				<h3 class="listing-desc-headline margin-top-60 margin-bottom-30">Location</h3>

                <iframe src="https://www.google.com/maps/embed?pb=<?php echo $cafe['place'] ?>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>


<?php $this->load->view('includes/footer') ?>