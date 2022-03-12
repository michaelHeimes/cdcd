<?php 
/**
 * Template name: Home Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main" role="main">
			    <?php the_content();?>

				<div class="banner home-banner has-bg text-center">
					<div class="bg auto" style="background-image: url('/wp-content/uploads/2022/03/IMG_9872.jpg')"></div>
					<div class="relative">
						<h1><span class="highlight pink-highlight">Co-design by Carla DiOrio</span></h1>
						<div class="break break-5"><span></span><span></span><span></span><span></span><span></span></div>
						<h2 class="white">Collaborative Heirloom Seating.</h2>
					</div>
				</div>				
				
				<section class="image-collage">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
						<div class="cell has-bg">
							<div class="grid-x grid-padding-x small-up-2 medium-up-3 align-center">
								<div class="cell grid-x align-center align-middle"><img src="/wp-content/uploads/2022/03/IMG_0292.jpeg"></div>
								<div class="cell grid-x align-center align-middle"><img src="/wp-content/uploads/2022/03/IMG_1773.jpeg"></div>
								<div class="cell grid-x align-center align-middle"><img src="/wp-content/uploads/2022/03/IMG_9852.jpeg"></div>
								<div class="cell grid-x align-center align-middle"><img src="/wp-content/uploads/2022/03/IMG_2228.jpeg"></div>
								<div class="cell grid-x align-center align-middle"><img src="/wp-content/uploads/2022/03/IMG_4522.jpeg"></div>
								<div class="cell grid-x align-center align-middle"><img src="/wp-content/uploads/2022/03/IMG_9071.jpeg"></div>
								<div class="cell grid-x align-center align-middle"><img src="/wp-content/uploads/2022/03/IMG_9194-scaled.jpeg"></div>
								<div class="cell grid-x align-center align-middle"><img src="/wp-content/uploads/2022/03/IMG_9727.jpeg"></div>
								<div class="cell grid-x align-center align-middle"><img src="/wp-content/uploads/2022/03/IMG_9854.jpeg"></div>
							</div>
							<div class="bg font-display grid-x flex-dir-column text-center">
								<div>Exquisite.</div>
								<div>Striking.</div>
								<div>Street.</div>
								<div>Posh.</div>
							</div>
						</div>
					</div>
				</section>	
	
				<section class="cta-boxes has-bg">
					<div class="bg" style="background-image: url('https://images.squarespace-cdn.com/content/v1/5b5c7572620b85a43980fbb9/1595290431344-SUOQAO79JPY1SUSLI7JJ/image-asset.jpeg')"></div>
					<div class="grid-container">
						<div class="grid-x grid-padding-x">			
							<section class="services cell small-12 tablet-6">
								<div class="inner mauve-bg">
									<h2>Our Services</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									<a class="arrow-link" href="/services">
										<span>Learn More</span>
										<svg id="Symbol_82" data-name="Symbol 82" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
											<path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" fill="#f5dae3"></path>
										</svg>										
									</a>
								</div>
							</section>
		
							<section class="about cell small-12 tablet-6">
								<div class="inner mauve-bg">
									<h2>About CDCD</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									<a class="arrow-link" href="/about">
										<span>Learn More</span>
										<svg id="Symbol_82" data-name="Symbol 82" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
											<path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" fill="#f5dae3"></path>
										</svg>	
									</a>
								</div>
							</section>
						</div>
					</div>
				</section>
			    				
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>