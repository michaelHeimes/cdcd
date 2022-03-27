<?php 
/**
 * Template name: Services Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	<div class="content">
	
		<div class="inner-content">
	
			<div class="banner home-banner has-bg text-center">
					<div class="bg" style="background-image: url('https://images.squarespace-cdn.com/content/v1/5b5c7572620b85a43980fbb9/1595290431344-SUOQAO79JPY1SUSLI7JJ/image-asset.jpeg')"></div>				<div class="relative">
					<h1><span class="highlight pink-highlight">Services and Pricing</span></h1>
				</div>
			</div>	
	
		    <main class="main" role="main">										
				<section id="our-services" class="services">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 large-10 large-offset-1 xlarge-8 xlarge-offset-2">
								<h2>Our Services</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								<h3>Pricing</h3>
								<p>Chairs and Rockers: $1,500 - $3,000.</p>
								<p>Sofas: $3,000 - $5,000</p>
							</div>
						</div>
					</div>
				</section>
				
				<section id="our-process" class="process entry-content">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 large-10 large-offset-1 xlarge-8 xlarge-offset-2">
								<div>
								<h2>Our Process</h2>
								</div>
								<img class="alignright size-medium" src="/wp-content/uploads/2022/03/IMG_8076.jpeg" width="300px">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<ul class="how-it-works">
									<li><b>Step 1:</b> Provide your own antique or vintage chair, Rocker, Sofa or settee frame. If you don’t already have a piece for reupholstery, Carla will source one for you, for an additional fee.</li>
									<li><b>Step 2:</b> Collab with CDCD in deciding which fabric or textile images your heart snd home happiest. Price will be determined and shared before committing to the project. You will pay a standard cost  for labor and design services, and fabric price varies based on textiles chosen.</li>
									<li><b>Step 3:</b> Our team will reupholster the piece.</li>
									<li><b>Step 4:</b> Take home a beautiful piece of responsibly-sourced furniture you can love for years to come.</li>
								</ul>
								<small>Note: we are located just outside of Philadelphia and work predominantly with customers in this region. However, if you would like to work with Carla and can arrange shipping, we are happy to do that.
</small>
							</div>
						</div>
					</div>
				</section>
				
				<section id="our-practices" class="practices">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 large-10 large-offset-1 xlarge-8 xlarge-offset-2">
								<h2>Our Practices</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<a class="arrow-link" href="/about/#our-practices">
									<span>Learn More</span>
									<svg id="Symbol_82" data-name="Symbol 82" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
										<path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" fill="#9d6027"></path>
									</svg>	
								</a>		
							</div>
						</div>
					</div>
				</section>
				    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->
</article>

<?php get_footer(); ?>