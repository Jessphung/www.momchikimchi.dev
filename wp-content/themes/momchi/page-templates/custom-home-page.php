<?php
/*
 * Template Name: Custom Home Page
 * Description: A home page with featured slider and widgets.
 *
 * @package Striker
 * @since Striker 1.0
 */

get_header(); ?>

	
        
        
        <div id="primary_home" class="content-area">
			<div id="content" class="fullwidth" role="main">

                  <div class="row">
   <div class="circleBase type3"> <img src="http://www.momchikimchi.dev/wp-content/uploads/2016/02/checheh_kimchi.jpg" alt="Kimchi"></div>

     <div class="featuretext">
			 <h3><?php echo esc_attr( get_theme_mod( 'featured_textbox' ) ); ?></h3>
              <div class="featuretext_button">
            <?php if ( get_theme_mod( 'featured_button_url' ) ) : ?>
			<a href="<?php echo esc_url( get_theme_mod( 'featured_button_url' ) ); ?>" ><?php echo __('Find Out More', 'striker'); ?></a>
			<?php endif; ?>
			</div>
	</div>
    
   

	<div class="section group">
    
	<div class="col span_1_of_3">
    <?php if ( is_active_sidebar( 'left_column' ) && dynamic_sidebar('left_column') ) : else : ?>
         <div class="widget">
			<?php echo '<h4>' . __('Widget Ready', 'striker') . '</h4>'; ?>
            <?php echo '<p>' . __('This left column is widget ready! Add one in the admin panel.', 'striker') . '</p>'; ?>
            </div>     
	<?php endif; ?>  
		</div>
        
	<div class="col span_1_of_3">
	<?php if ( is_active_sidebar( 'center_column' ) && dynamic_sidebar('center_column') ) : else : ?>
         <div class="widget">
			<?php echo '<h4>' . __('Widget Ready', 'striker') . '</h4>'; ?>
            <?php echo '<p>' . __('This center column is widget ready! Add one in the admin panel.', 'striker') . '</p>'; ?>
            </div>     
	<?php endif; ?> 

	</div>
    
	<div class="col span_1_of_3">
	<?php if ( is_active_sidebar( 'right_column' ) && dynamic_sidebar('right_column') ) : else : ?>
         <div class="widget">
			<?php echo '<h4>' . __('Widget Ready', 'striker') . '</h4>'; ?>
            <?php echo '<p>' . __('This right column is widget ready! Add one in the admin panel.', 'striker') . '</p>'; ?>
            </div>     
	<?php endif; ?> 
	</div>
	</div>

                
			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>