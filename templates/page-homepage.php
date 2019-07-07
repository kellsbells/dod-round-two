<?php
/**
 * Template Name: Homepage
 *
 * @package DOD
 */

$imagedir = get_stylesheet_directory_uri() . "/assets/img";

get_header();

?>


<div class="homepage">
	<section class="hero">
		<div class="container">

			<div class="hero-left">
				<div class="hero-svg">
					<?php readfile(get_stylesheet_directory_uri() . "/assets/img/left-dod-logo.svg"); ?>
				</div>
				<p>
					Do Over Dogs is a foster-based, 501(c)(3) organization that gives at-risk dogs from the shelter environment a second chance at life. We focus our rescue efforts on dogs and puppies that are at high risk of euthanasia, and know that it will never end but hope that someday we won't be needed anymore!
				</p>

				<a class="button" href="#dogs">Meet the Dogs</a>
			</div>

			<div class="hero-right">
				<img src="<?php echo $imagedir ?>/hero-watercolor.png">
			</div>

		</div>	

		<img class="hero-seperator" src="<?php echo $imagedir ?>/teal-watercolor.png">
	</section>


	<section class="dogs featured-dogs" id="dogs">
		<div class="container">
			<div class="dogs__container featured">
				<?php 

					$args = array( 'post_type' => 'dogs', 'posts_per_page' => 1 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();

						$main_photo = array_values(get_post_meta( $post->ID, '_dod_photos', true ));
					  ?>

					  <a href="<?php the_permalink(); ?>" class="single dog">
							<div class="wrapper">

								<div class="main-photo-container"> 
									<div class="main-photo" style="background: url(<?php echo $main_photo[0] ?>) no-repeat center center; background-size: cover;">
									</div>
								</div>
								

								<div class="description">

									<div class="title">
										<h3><?php the_title(); ?></h3>
									</div>
								
									<div class="details">
										<p><?php echo get_post_meta( $post->ID, '_dod_breed', true ) ?></p>
										<small>Size: <?php echo get_post_meta( $post->ID, '_dod_size', true ) ?></small><i class="fas fa-paw" aria-hidden="true"></i>
										<small>Age: <?php echo get_post_meta( $post->ID, '_dod_age', true ) ?></small>


										<div class="cta">
											<p>Click to See More</p>
										</div>

									</div>
								</div>
							</div>
						</a>

						<div class="single text">
							<h2>Adoptable Dogs</h2>
							
							<p>All of our adoptable dogs are in foster homes throughout the greater Denver area of Colorado. We utilize the loving homes of our fosters to bridge the connection from death row, to a forever home. Prior to adoption each Do Over Dog is spayed/neutered, microchiped, and has been administered a rabies vaccine, DH2PP, and a heartworm test. To meet a pet you're interested in contact us today!</p>

							<p>Sometimes we often receive multiple applications for each pup. Priority is given in the order of submitted applications provided that the adopter and pup are a forever fit for each other.</p>
						</div>
					  <?php
					endwhile;
				?>		
			</div>
		</div>
		<img class="featured-dogs-seperator" src="<?php echo $imagedir ?>/teal-purple-watercolor.png">

	</section>

	<section class="dogs standard-dogs">
		<div class="container">
			<div class="dogs__container standard">

				<?php 

					$args = array( 'post_type' => 'dogs', 'offset' => 1, 'posts_per_page' => 9999 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();

						$main_photo = array_values(get_post_meta( $post->ID, '_dod_photos', true ));
					  ?>

					  <a href="<?php the_permalink(); ?>" class="single dog">
							<div class="wrapper">


								<div class="main-photo-container"> 
									<div class="main-photo" style="background: url(<?php echo $main_photo[0] ?>) no-repeat center center; background-size: cover;">
									</div>
								</div>

								<div class="description">

									<div class="title">
										<h3><?php the_title(); ?></h3>
									</div>
								
									<div class="details">
										<p><?php echo get_post_meta( $post->ID, '_dod_breed', true ) ?></p>
										<small>Size: <?php echo get_post_meta( $post->ID, '_dod_size', true ) ?></small><i class="fas fa-paw" aria-hidden="true"></i>
										<small>Age: <?php echo get_post_meta( $post->ID, '_dod_age', true ) ?></small>


										<div class="cta">
											<p>Click to See More</p>
										</div>

									</div>

								</div>
							</div>
						</a>
					  <?php
					endwhile;
				?>
			</div>	
		</div>
		<img class="standard-dogs-seperator" src="<?php echo $imagedir ?>/teal-watercolor-2.png">
	</section>


	<section class="help" id="help">
		<div class="container">
		
				<div class="help-wrapper">

					<h2>Get Involved</h2>

					<p>Want to save sweet pups in need but can't adopt? There's lot of ways to get involved!</p>
					<p>As a foster-based rescue, the more foster families we have the more dogs we can rescue. Not only is it a great way to get your puppy fix, it's 100% free for you! We provide all food, supplies, and medical care.</p>
					<p>We are also constantly looking for dedicated volunteers. All skills and talents are welcomed and appreciated! Our needs range from driving dogs (like Uber, but better) to helping us orchestrate adoption events and lots in between.</p>
					<p>And lastly, donations are always needed and incredibly appreciated. Every last penny goes to saving dogs in need.</p>


					<div class="link-farm">
						<a href="/foster" class="help-link">
							<div class="photo" style="background: url(<?php echo $imagedir ?>/dod-1.jpg) no-repeat center center; background-size: cover;">
							</div>
							<div class="cta">
								<i class="fas fa-home"></i>
								Learn about Fostering
							</div>
						</a>

						<a href="/volunteer" class="help-link">
							<div class="photo" style="background: url(<?php echo $imagedir ?>/dod-2.jpg) no-repeat center center; background-size: cover;">
							</div>
							<div class="cta">
								<i class="fas fa-paw"></i>
								Learn about Volunteering
							</div>
						</a>
						<a href="https://www.paypal.me/dooverdogs" target="_blank" class="help-link">
							<div class="photo" style="background: url(<?php echo $imagedir ?>/dod-3.jpg) no-repeat center center; background-size: cover;">
							</div>
							<div class="cta">
								<i class="fas fa-heart"></i>
								Click to Donate
							</div>
						</a>

					</div>

				</div>
		</div>
		<img class="help-seperator" src="<?php echo $imagedir ?>/purple-watercolor.png">
	</section>

	<section class="contact" id="contact">
		<div class="container">

			<div class="contact-wrapper">
				<div class="contact-left">
					<h2>Contact Do Over Dogs</h2>
					<p>For general questions or adoption inquiries please contact us!</p>
					<img src="<?php echo $imagedir ?>/dod-logo.jpg">
				</div>

				<div class="contact-right">
					<div class="contact-form">
						<?php echo do_shortcode( '[contact-form-7 id="26" title="Contact Form"]' ); ?>
					</div>	
				</div>
			</div>
		</div>
	</section>
</div>	

<?php get_footer();
