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
							<h2>Follow us on social!</h2>
							<ul class="menu horizontal">
								<li>
									<a href="<?php the_field('instagram_url', 'option');?>">
										<svg id="" data-name="Group 6" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 12.541 12.543" class="style-svg replaced-svg svg-replaced-1">
									  	<g id="Group_5" data-name="Group 5" transform="translate(0 0)">
											<path id="Path_5" data-name="Path 5" d="M13.407,3.688a4.584,4.584,0,0,0-.292-1.522A3.213,3.213,0,0,0,11.28.331,4.6,4.6,0,0,0,9.758.039C9.087.007,8.874,0,7.171,0S5.255.007,4.586.037A4.584,4.584,0,0,0,3.064.328a3.06,3.06,0,0,0-1.113.725,3.088,3.088,0,0,0-.723,1.11A4.6,4.6,0,0,0,.937,3.685C.905,4.357.9,4.57.9,6.273S.905,8.189.935,8.858a4.584,4.584,0,0,0,.292,1.522,3.213,3.213,0,0,0,1.835,1.835,4.6,4.6,0,0,0,1.522.292c.669.029.882.037,2.585.037s1.916-.007,2.585-.037a4.583,4.583,0,0,0,1.522-.292,3.208,3.208,0,0,0,1.835-1.835A4.6,4.6,0,0,0,13.4,8.858c.029-.669.037-.882.037-2.585S13.436,4.357,13.407,3.688Zm-1.13,5.121a3.438,3.438,0,0,1-.216,1.164,2.081,2.081,0,0,1-1.191,1.191,3.451,3.451,0,0,1-1.164.216c-.662.029-.86.037-2.534.037S5.3,11.409,4.64,11.379a3.437,3.437,0,0,1-1.164-.216,1.93,1.93,0,0,1-.72-.468,1.951,1.951,0,0,1-.468-.72,3.45,3.45,0,0,1-.216-1.164c-.029-.662-.037-.86-.037-2.534s.007-1.875.037-2.534A3.436,3.436,0,0,1,2.287,2.58a1.907,1.907,0,0,1,.471-.72,1.947,1.947,0,0,1,.72-.468,3.452,3.452,0,0,1,1.164-.216c.662-.029.86-.037,2.534-.037s1.875.007,2.534.037a3.437,3.437,0,0,1,1.164.216,1.928,1.928,0,0,1,.72.468,1.95,1.95,0,0,1,.468.72,3.452,3.452,0,0,1,.216,1.164c.029.662.037.86.037,2.534S12.307,8.147,12.277,8.809Z" transform="translate(-0.898 0)" fill="#e91d2d"></path>
											<path id="Path_6" data-name="Path 6" d="M128.4,124.281a3.222,3.222,0,1,0,3.222,3.222A3.223,3.223,0,0,0,128.4,124.281Zm0,5.312a2.09,2.09,0,1,1,2.09-2.09A2.09,2.09,0,0,1,128.4,129.593Z" transform="translate(-122.128 -121.23)" fill="#e91d2d"></path>
											<path id="Path_7" data-name="Path 7" d="M363.766,89.2a.752.752,0,1,1-.752-.752A.752.752,0,0,1,363.766,89.2Z" transform="translate(-353.391 -86.275)" fill="#e91d2d"></path>
									  	</g>
										</svg>
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