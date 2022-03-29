<?php 
/**
 * Template name: Contact Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
 <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	 <div class="content">
	 
		 <div class="inner-content">
	 
			 <div class="banner home-banner has-bg text-center">
			 <div class="bg" style="background-image: url('<?php the_field('banner_background_image'); ?>')"></div>
				 <div class="relative">
					 <h1><span class="highlight pink-highlight"><?php the_field('banner_heading');?></span></h1>
				 </div>
			 </div>	
	
		    <main class="main" role="main">			

				<section class="contact-copy">
					<div class="grid-container">
						<div class="cell">
							<?php the_field('copy');?>
							<div class="form-wrap">
								<div><a href="mailto:<?php the_field('email_address');?>"><?php the_field('email_address');?></a></div>
								<div><a href="tel:<?php the_field('phone_number');?>"><?php the_field('phone_number');?></a></div>
							</div>
						</div>
					</div>
				</section>
			    				
				<section class="contact-copy">
					<div class="grid-container">
						<div class="cell">
							<h2>Follow us on social for lorem ipsum dolor sit amet.</h2>
							<ul class="menu horizontal">
								<li>
									<a href="#" target="_blank">
										Instagram
									</a>
								</li>
								<li>
									<a href="#" target="_blank">
										FaceBook
									</a>
								</li>	
								<li>
									<a href="#" target="_blank">
										Pinerest
									</a>
								</li>
								<li>
									<a href="#" target="_blank">
										LinkedIn
									</a>
								</li>																				
							</ul>
							
						</div>
					</div>
				</section>
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>