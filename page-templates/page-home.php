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
				<div class="bg show-for-tablet" style="background-image: url('<?php echo esc_url($banner_img['url']); ?>')"></div>
				<div class="grid-container">
					<div class="grid-x grid-padding-x">
						<div class="relative cell text-center">
							<?php 
							$image = get_field('banner_logo');
							if( !empty( $image ) ): ?>
							<div class="logo-wrap">
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							</div>
							<?php endif; ?>
							<img class="hide-for-tablet" src="<?php echo esc_url($banner_img['url']); ?>" alt="<?php echo esc_attr($banner_img['alt']); ?>" />
							<div class="show-for-sr">
								<h1 class="show-for-sr"><?php $blog_title = get_bloginfo( 'name' ); echo $blog_title;?></h1>
								<h2 class="relative text-center"><?php $blog_desc = get_bloginfo( 'description' ); echo $blog_desc;?></h2>
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
	
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>