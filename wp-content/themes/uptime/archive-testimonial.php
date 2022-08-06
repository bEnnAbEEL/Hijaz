<?php 
	get_header(); 
	
	$i           = 0;
	$title       = get_theme_mod( 'testimonials_archive_title', 'Customer Stories' );
	$description = get_theme_mod( 'testimonials_archive_description', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.' );
?>

<section class="bg-primary-alt header-inner o-hidden">	
	<div class="container">
		
		<?php if( 'yes' == get_theme_mod( 'show_testimonial_archive_breadcrumbs','yes' ) ) : ?>
			<div class="row my-3">
				<div class="col">
					<?php echo get_tommusrhodus_breadcrumbs(); ?>
				</div>
			</div>
		<?php endif; ?>
		
		<div class="row pt-5 py-5 text-center justify-content-center align-items-center layer-2">
			<div class="col-xl-8 col-lg-10">
				<h1 class="display-4"><?php echo wp_kses_post( $title ); ?></h1>
				<p class="lead mb-0"><?php echo wp_kses_post( $description ); ?></p>
			</div>
		</div>
		
	</div>
	<div class="decoration top right scale-2 d-none d-lg-block" data-jarallax-element="-200">
        <svg class="bg-primary" width="298" height="197" viewBox="0 0 298 197" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M271.518 116.857C266.116 125.511 259.584 133.287 253.194 141.164C248.36 147.125 243.548 153.103 238.583 158.953C236.134 161.84 233.362 164.453 230.733 167.185C229.881 168.072 228.921 168.871 228.172 169.833C225.727 172.979 222.572 175.452 220.145 178.651C217.581 182.032 213.84 184.145 210.204 186.288C201.958 191.145 193.024 193.809 183.61 195.366C174.13 196.932 164.633 196.987 155.102 196.749C148.211 196.575 141.723 194.466 135.547 191.72C126.522 187.704 117.201 184.554 107.795 181.695C102.133 179.974 96.211 179.015 90.348 178.072C82.455 176.801 74.483 176.021 66.59 174.748C61.49 173.924 56.395 173.656 51.27 173.844C41.399 174.205 31.62 172.856 21.799 172.319C17.233 172.069 12.623 171.329 8.32199 169.428C3.47399 167.289 0.64998 163.86 0.50198 158.356C0.33398 152.055 1.14497 145.872 2.36097 139.725C4.05597 131.147 6.94698 122.92 9.63998 114.625C11.435 109.1 14.044 104.068 17.138 99.191C20.263 94.261 22.833 88.964 26.156 84.181C28.943 80.169 32.218 76.415 35.73 73.013C39.232 69.62 43.835 67.853 48.488 66.47C49.535 66.159 50.73 66.247 51.851 66.298C56.263 66.493 60.572 67.214 64.898 68.22C71.472 69.749 77.906 72.04 84.709 72.466C87.564 72.646 90.438 72.616 93.301 72.558C98.117 72.46 102.93 72.236 107.746 72.117C113 71.986 117.902 70.75 122.18 67.582C129.756 61.973 137.328 56.355 144.856 50.678C150.336 46.543 155.829 42.416 161.157 38.088C167.837 32.662 174.261 26.918 180.968 21.529C186.708 16.916 192.419 12.265 198.823 8.50796C202.481 6.35996 206.471 5.08997 210.255 3.29897C212.142 2.40397 214.415 2.16795 216.544 1.97295C222.355 1.43795 228.177 0.931955 234.007 0.701955C239.169 0.498955 244.191 1.50895 249.097 3.18795C256.88 5.85395 264.337 9.12595 271.404 13.417C275.808 16.089 280.133 18.696 283.58 22.601C285.338 24.591 287.455 26.2709 289.187 28.2829C296.781 37.0899 298.767 47.203 296.302 58.465C295.044 64.211 293.189 69.723 290.986 75.139C287.625 83.399 284.443 91.746 280.726 99.846C278.041 105.691 274.613 111.197 271.518 116.857ZM95.393 132.113C95.569 132.066 95.745 132.021 95.92 131.974C95.768 131.382 95.617 130.788 95.465 130.197C95.283 130.244 95.102 130.291 94.922 130.338C95.078 130.93 95.236 131.521 95.393 132.113ZM225.68 158.404C225.83 158.343 225.985 158.293 226.121 158.211C226.142 158.199 226.103 157.986 226.062 157.977C225.916 157.94 225.755 157.948 225.601 157.938C225.627 158.092 225.652 158.248 225.68 158.404Z"
          fill="black" />
        </svg>
 	</div>
</section>

<section class="pb-0 pt-4 bg-primary-alt mb-lg-n7">
	
	<div class="container">
		<div class="row">	
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
				
					get_template_part( 'loop/content-testimonial', 'row' );
					
					// Exit after loading the first post
					break;
						
				endwhile;	
				else : 
					
					get_template_part( 'loop/content', 'none' );
					
				endif;
				
				rewind_posts();
			?>
		</div>
	</div>
	
	<?php echo tommusrhodus_svg_dividers_pluck( 'pipe', '' ); ?>
	
</section>

<section class="pt-5">
	<div class="container">
		
		<div class="row">	
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					
					if( $i >= 1 ){
						get_template_part( 'loop/content-testimonial', 'grid' );
					}
					
					$i++;
						
				endwhile;	
				else : 
					
					get_template_part( 'loop/content', 'none' );
					
				endif;
			?>
		</div>
		
		<?php get_template_part( 'inc/content', 'pagination' ); ?>
		
	</div>
</section>

<?php get_footer();