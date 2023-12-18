<?php $this->load->view('public/partials/view_public_header.php'); ?>
<div class="banner">
	<div class="container">
		<script src="<?= base_url('assets/js/responsiveslides.min.js'); ?>"></script>
		<script>
		$(function () {
		$("#slider").responsiveSlides({
			auto: true,
			nav: true,
			speed: 500,
		namespace: "callbacks",
		pager: true,
		});
		});
		</script>
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
				<li>
					
					<div class="banner-text">
						<h3>Find your vehicles today!   </h3>
						<p>VSMS offers a 7-day, 250-mile Buy Back Guarantee. Contact us today to learn more about it!</p>
						
					</div>
					
				</li>
				<li>
					
					<div class="banner-text">
						<h3>No Haggle Pricing  </h3>
						<p>No need to brush up on your bargaining skill! We believe in offering a low price instead of making you negotiate for it. After all, everyone deserves the same great no-haggle pricing. Each low price is yours for the taking.</p>
						
					</div>
					
				</li>
				<li>
					<div class="banner-text">
						<h3>Home Services Bring the Cars to You</h3>
						<p>For your convenience, our dealers have expanded the ways you can shop for a new or used car from the comfort of home</p>
						
					</div>
					
				</li>
			</ul>
		</div>
	</div>
</div>
<body>

    <h1>Welcome to Our Motorcycle Sales</h1>

    <p>
        We are passionate about providing the best motorcycles for our customers. 
        Our dedicated team is committed to delivering quality and excellent service in every transaction.
    </p>

    <h2>Popular Motorcycle Models</h2>

    <?php
    // Array of motorcycle models
    $motorcycleModels = [
        'Honda CBR600RR',
        'Yamaha YZF-R1',
        'Suzuki GSX-R1000',
        'Kawasaki Ninja ZX-10R',
        'Ducati Panigale V4',
        'Harley-Davidson Street Glide',
    ];
    ?>

    <ul>
        <?php foreach ($motorcycleModels as $model): ?>
            <li><?php echo $model; ?></li>
        <?php endforeach; ?>
    </ul>

    <p>
        Whether you're a seasoned rider or a beginner, we have the perfect motorcycle for you. 
        Explore our showroom to discover the latest models and find the one that suits your style.
    </p>

    <!-- Add any additional content or features here -->

</body>
</html>

<?php $this->load->view('public/partials/view_public_footer.php'); ?>