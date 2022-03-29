<?php 
/**
 * The template for displaying all pages
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
				 <?php if( have_rows('content_rows') ):?>
					 <?php while ( have_rows('content_rows') ) : the_row();?>	
					 <section id="<?php the_sub_field('section_id');?>" class="entry-content">
						 <div class="grid-container">
							 <div class="grid-x grid-padding-x">
								 <div class="cell small-12 large-10 large-offset-1 xlarge-8 xlarge-offset-2">
									 <?php the_sub_field('copy');?>
									 <?php if( have_rows('steps') ):?>
									 <ul class="how-it-works">
										 <?php while ( have_rows('steps') ) : the_row();?>	
										 <?php $step_num = get_row_index();?>
										 <li><b>Step <?php echo $step_num;?> </b><?php the_sub_field('step');?></li>
										 <?php endwhile;?>
									 </ul>
									 <?php endif;?>
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
									 <?php if( $footnote = get_sub_field('footnote')):?>
										 <small><?php echo $footnote;?></small>
									 <?php endif;?>
								 </div>
							 </div>
						 </div>
					 </section>
					 <?php endwhile;?>
				 <?php endif;?>
										 
			 </main> <!-- end #main -->
			 
		 </div> <!-- end #inner-content -->
 
	 </div> <!-- end #content -->
 </article>
 
 <?php get_footer(); ?>