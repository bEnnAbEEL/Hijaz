<footer class="pb-4 bg-primary-3 <?php echo esc_attr( get_theme_mod( 'footer_text_colour', 'text-light' ) ); ?>">
	<div class="container">

		<div class="row mb-5">
			<?php
				if( is_active_sidebar('vanilla_footer_1') && !( is_active_sidebar('vanilla_footer_2') ) && !( is_active_sidebar('vanilla_footer_3') ) && !( is_active_sidebar('vanilla_footer_4') ) ){
					echo '<div class="col">';
						dynamic_sidebar('vanilla_footer_1');
					echo '</div>';
				}

				if( is_active_sidebar('vanilla_footer_2') && !( is_active_sidebar('vanilla_footer_3') ) && !( is_active_sidebar('vanilla_footer_4') ) ){
					echo '<div class="col-sm-6">';
						dynamic_sidebar('vanilla_footer_1');
					echo '</div><div class="col-sm-6">';
						dynamic_sidebar('vanilla_footer_2');
					echo '</div><div class="clear"></div>';
				}

				if( is_active_sidebar('vanilla_footer_3') && !( is_active_sidebar('vanilla_footer_4') ) ){
					echo '<div class="col-md-4 col-sm-6">';
						dynamic_sidebar('vanilla_footer_1');
					echo '</div><div class="col-md-4 col-sm-6">';
						dynamic_sidebar('vanilla_footer_2');
					echo '</div><div class="col-md-4 col-sm-6">';
						dynamic_sidebar('vanilla_footer_3');
					echo '</div><div class="clear"></div>';
				}

				if( ( is_active_sidebar('vanilla_footer_4') ) ){
					echo '<div class="col-md-3 col-sm-6">';
						dynamic_sidebar('vanilla_footer_1');
					echo '</div><div class="col-md-3 col-sm-6">';
						dynamic_sidebar('vanilla_footer_2');
					echo '</div><div class="col-md-3 col-sm-6">';
						dynamic_sidebar('vanilla_footer_3');
					echo '</div><div class="col-md-3 col-sm-6">';
						dynamic_sidebar('vanilla_footer_4');
					echo '</div><div class="clear"></div>';
				}
			?>
		</div>

		<div class="row justify-content-center mb-2">
			<div class="col-auto">
				<?php get_template_part( 'inc/content', 'footer-social' );  ?>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col col-md-auto text-center">
				<?php get_template_part( 'inc/content', 'copyright' );  ?>
			</div>
		</div>

	</div>
</footer>
