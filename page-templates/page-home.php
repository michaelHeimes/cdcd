<?php 
/**
 * Template name: Home Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
			<div class="banner home-banner has-bg text-center">
				<?php $banner_img = get_field('banner_image');?>
				<div class="bg auto show-for-tablet" style="background-image: url('<?php echo esc_url($banner_img['url']); ?>')"></div>
				<div class="grid-container">
					<div class="grid-x grid-padding-x">
						<div class="relative cell text-center">
							<h1><span class="highlight pink-highlight"><?php the_field('banner_heading');?></span></h1>
							<img class="hide-for-tablet" src="<?php echo esc_url($banner_img['url']); ?>" alt="<?php echo esc_attr($banner_img['alt']); ?>" />
							<div class="break break-5"><span></span><span></span><span></span><span></span><span></span></div>
							<div class="tagline has-bg">
		<!-- 						<div class="bg contain hide-for-tablet" style="background-image: url('/wp-content/uploads/2022/03/home-banner.jpg')"></div> -->
								<h2 class="relative text-center"><?php the_field('banner_sub-heading');?></h2>
							</div>
						</div>
					</div>
					</div>
			</div>		
	
		    <main class="main" role="main">
			    <?php the_content();?>		
				
				<section class="image-collage">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
						<div class="cell has-bg">
							<?php 
							$images = get_field('collage_images');
							if( $images ): ?>
								<div class="grid-x grid-padding-x small-up-2 medium-up-3 align-center">
									<?php foreach( $images as $image ): ?>
										<div class="cell grid-x align-center align-middle">
											<img src="<?php echo esc_url($image['sizes']['collage-square']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										</div>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>

							<?php if( have_rows('overlapping_words') ):?>
							<div class="bg font-display grid-x flex-dir-column text-center">
								<?php while ( have_rows('overlapping_words') ) : the_row();?>	
								<div><?php the_sub_field('word');?></div>
								<?php endwhile;?>
							</div>
							<?php endif;?>
						</div>
					</div>
				</section>	
				
				<section class="cta-boxes has-bg">
					<div class="bg" style="background-image: url('<?php the_field('cta_background_image');?>')"></div>
					<div class="grid-container">
						<div class="grid-x grid-padding-x">		
							<?php if( have_rows('cta_left_box') ):?>
								<?php while ( have_rows('cta_left_box') ) : the_row();?>	
								<section class="cell small-12 tablet-6 grid-x">
									<div class="inner white-bg">
										<h2><?php the_sub_field('heading');?></h2>
										<p><?php the_sub_field('text');?></p>
										<?php 
										$link = get_sub_field('link');
										if( $link ): 
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
											?>
											<a class="arrow-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
												<span><?php echo esc_html( $link_title ); ?></span>
												<svg id="Symbol_82" data-name="Symbol 82" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
													<path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" fill="#9d6027"></path>
												</svg>													
											</a>
										<?php endif; ?>
									</div>
								</section>
								<?php endwhile;?>
							<?php endif;?>	
							<?php if( have_rows('cta_right_box') ):?>
								<?php while ( have_rows('cta_right_box') ) : the_row();?>	
								<section class="cell small-12 tablet-6 grid-x">
									<div class="inner white-bg">
										<h2><?php the_sub_field('heading');?></h2>
										<p><?php the_sub_field('text');?></p>
										<?php 
										$link = get_sub_field('link');
										if( $link ): 
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
											?>
											<a class="arrow-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
												<span><?php echo esc_html( $link_title ); ?></span>
												<svg id="Symbol_82" data-name="Symbol 82" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
													<path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" fill="#9d6027"></path>
												</svg>													
											</a>
										<?php endif; ?>
									</div>
								</section>
								<?php endwhile;?>
							<?php endif;?>	
						</div>
					</div>
				</section>
	

			    				
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>