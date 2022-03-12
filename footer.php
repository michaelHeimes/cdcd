<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer mauve-bg" role="contentinfo">
					<div class="grid-container">
					
						<div class="inner-footer grid-x grid-padding-x">
							
							<div class="cell small-12 medium-shrink">
								<ul class="menu">
									<li class="logo"><a href="<?php echo home_url(); ?>">
										Logo here
										<?php 
										$image = get_field('header_logo', 'option');
										if( !empty( $image ) ): ?>
										    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
									</a></li>
								</ul>								
							</div>
							
							<div class="small-12 medium-auto cell">
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>
							
							<div class="small-12 medium-12 large-12 cell">
								<p class="source-org copyright text-right">&copy; <?php echo date('Y'); ?> | <?php bloginfo('name'); ?>.</p>
							</div>
						
						</div> <!-- end #inner-footer -->
				
					</div>
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->