<?php get_header(); ?>

	<main role="main">

		<section class="title-flash show">
			<svg version="1.1" preserveAspectRatio="xMinYMin"
				 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
				 x="0px" y="0px" viewBox="0 0 167.2 14" style="enable-background:new 0 0 167.2 14;"
				 xml:space="preserve">
				<path class="st0" d="M7.6,2.4c1.7,0,3.2,0.7,4.2,1.9l1.8-1.7C12.2,1,10,0,7.6,0C3.4,0,0,3.1,0,7c0,3.9,3.4,7,7.6,7
					c2.3,0,4.5-1,6-2.6l-1.8-1.7c-1,1.2-2.6,1.9-4.2,1.9c-2.9,0-5.2-2-5.2-4.6C2.4,4.5,4.8,2.4,7.6,2.4z"/>
				<polygon class="st0" points="36.1,2.6 41.3,2.6 41.3,13.8 43.7,13.8 43.7,2.6 49,2.6 49,0.2 36.1,0.2 	"/>
				<path class="st0" d="M24.3,0.2l-6.4,13.6h2.7l1.7-3.5h6l1.7,3.5h2.7L26.1,0.2H24.3z M23.4,7.9l1.9-3.9l1.9,3.9H23.4z"/>
				<polygon class="st0" points="65.8,5.8 58.2,5.8 58.2,0.2 55.8,0.2 55.8,13.8 58.2,13.8 58.2,8.2 65.8,8.2 65.8,13.8 68.2,13.8
					68.2,0.2 65.8,0.2 	"/>
				<polygon class="st0" points="76.4,13.8 88.1,13.8 88.1,11.7 78.8,11.7 78.8,8.2 86.1,8.2 86.1,5.8 78.8,5.8 78.8,2.3 88.1,2.3
					88.1,0.2 76.4,0.2 	"/>
				<path class="st0" d="M102.2,0.2h-6.2v13.6h6.2c3.8,0,6.8-3,6.8-6.8v0C109,3.2,105.9,0.2,102.2,0.2z M102.2,11.4h-3.8V2.6h3.8
					c2.4,0,4.4,2,4.4,4.4C106.6,9.4,104.6,11.4,102.2,11.4z"/>
				<polygon class="st0" points="159.9,11.3 159.9,0.2 157.4,0.2 157.4,13.8 167.2,13.8 167.2,11.3 	"/>
				<path class="st0" d="M142.4,0.2L136,13.8h2.7l1.7-3.5h6l1.7,3.5h2.7l-6.4-13.6H142.4z M141.5,7.9l1.9-3.9l1.9,3.9H141.5z"/>
				<path class="st0" d="M129.2,4.5c0-2.4-2-4.4-4.4-4.4h-8v13.6h2.4V8.9h5.2l2.3,4.9h2.7l-2.6-5.5C128.3,7.6,129.2,6.2,129.2,4.5z
					 M124.8,6.5h-5.6V2.6h5.6c1.1,0,2,0.9,2,2C126.8,5.6,125.9,6.5,124.8,6.5z"/>
			</svg>
		</section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<section class="logo">
				<p>
					<svg version="1.1" preserveAspectRatio="xMinYMin meet"
						 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
						 x="0px" y="0px" viewBox="0 0 53.5 53.5" style="enable-background:new 0 0 53.5 53.5;"
						 xml:space="preserve">
					<style type="text/css">
						.st2 {
							fill: none;
							stroke: #000000;
							stroke-width: 2.5;
							stroke-miterlimit: 10;
						}
					</style>
					<g>
						<path d="M29.2,20.9l5.9,5.9l-5.9,5.9l-5.9-5.9L29.2,20.9 M29.2,17.3l-1.8,1.8L21.5,25l-1.8,1.8l1.8,1.8l5.9,5.9l1.8,1.8l1.8-1.8
							l5.9-5.9l1.8-1.8L36.9,25L31,19.1L29.2,17.3L29.2,17.3z"/>
					</g>
					<g>
						<path d="M29.2,2.5c8.5,0,16,3.6,20.9,9.2l-3.8,3.8c-3.9-4.7-10.1-7.7-17.2-7.7c-11.8,0-21.4,8.5-21.4,19c0,10.5,9.6,19,21.4,19
							c7,0,13.3-3,17.2-7.7l3.8,3.8C45.2,47.4,37.7,51,29.2,51C14.5,51,2.5,40.2,2.5,26.8C2.5,13.4,14.5,2.5,29.2,2.5 M29.2,0
							C13.1,0,0,12,0,26.8s13.1,26.8,29.2,26.8c8.9,0,17.2-3.7,22.8-10.1l1.5-1.8L51.9,40l-3.8-3.8l-1.9-1.9l-1.8,2.1
							c-3.6,4.2-9.3,6.8-15.3,6.8c-10.4,0-18.9-7.4-18.9-16.5s8.5-16.5,18.9-16.5c6,0,11.7,2.5,15.3,6.8l1.8,2.1l1.9-1.9l3.8-3.8l1.7-1.6
							L52,10.1C46.4,3.7,38.1,0,29.2,0L29.2,0z"/>
					</g>
					<line class="st2" x1="29.2" y1="19.8" x2="29.2" y2="8.9"/>
					<line class="st2" x1="29.2" y1="33.8" x2="29.2" y2="44.6"/>
					</svg>
				 </p>
			</section>

			<div class="contact">
				<p><button class="toggle-contact"><small>Book an Event</small></button></p>
			</div>

			<div class="rates">
				<p><a href="<?php echo get_field("rate_sheet"); ?>" target="_blank"><small>Info & Rates</small></a></p>
			</div>

			<div class="name">
				<p>
					<svg version="1.1"
						 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
						 x="0px" y="0px" width="167.2px" height="14px" viewBox="0 0 167.2 14" style="enable-background:new 0 0 167.2 14;"
						 xml:space="preserve">
						<path class="st1" d="M7.6,2.4c1.7,0,3.2,0.7,4.2,1.9l1.8-1.7C12.2,1,10,0,7.6,0C3.4,0,0,3.1,0,7c0,3.9,3.4,7,7.6,7
							c2.3,0,4.5-1,6-2.6l-1.8-1.7c-1,1.2-2.6,1.9-4.2,1.9c-2.9,0-5.2-2-5.2-4.6C2.4,4.5,4.8,2.4,7.6,2.4z"/>
						<polygon class="st1" points="36.1,2.6 41.3,2.6 41.3,13.8 43.7,13.8 43.7,2.6 49,2.6 49,0.2 36.1,0.2 	"/>
						<path class="st1" d="M24.3,0.2l-6.4,13.6h2.7l1.7-3.5h6l1.7,3.5h2.7L26.1,0.2H24.3z M23.4,7.9l1.9-3.9l1.9,3.9H23.4z"/>
						<polygon class="st1" points="65.8,5.8 58.2,5.8 58.2,0.2 55.8,0.2 55.8,13.8 58.2,13.8 58.2,8.2 65.8,8.2 65.8,13.8 68.2,13.8
							68.2,0.2 65.8,0.2 	"/>
						<polygon class="st1" points="76.4,13.8 88.1,13.8 88.1,11.7 78.8,11.7 78.8,8.2 86.1,8.2 86.1,5.8 78.8,5.8 78.8,2.3 88.1,2.3
							88.1,0.2 76.4,0.2 	"/>
						<path class="st1" d="M102.2,0.2h-6.2v13.6h6.2c3.8,0,6.8-3,6.8-6.8v0C109,3.2,105.9,0.2,102.2,0.2z M102.2,11.4h-3.8V2.6h3.8
							c2.4,0,4.4,2,4.4,4.4C106.6,9.4,104.6,11.4,102.2,11.4z"/>
						<polygon class="st1" points="159.9,11.3 159.9,0.2 157.4,0.2 157.4,13.8 167.2,13.8 167.2,11.3 	"/>
						<path class="st1" d="M142.4,0.2L136,13.8h2.7l1.7-3.5h6l1.7,3.5h2.7l-6.4-13.6H142.4z M141.5,7.9l1.9-3.9l1.9,3.9H141.5z"/>
						<path class="st1" d="M129.2,4.5c0-2.4-2-4.4-4.4-4.4h-8v13.6h2.4V8.9h5.2l2.3,4.9h2.7l-2.6-5.5C128.3,7.6,129.2,6.2,129.2,4.5z
							 M124.8,6.5h-5.6V2.6h5.6c1.1,0,2,0.9,2,2C126.8,5.6,125.9,6.5,124.8,6.5z"/>
					</svg>	 
				 </p>
			</div>

			<section class="intro">
				<div class="wrap">
					<h2>
						We believe people see the problems<br>
						of our world and have a desire to help, but<br>
						often don't know <a class="toggle-contact">where to start</a>.
					</h2>
				</div>
				<div class="bottom">
						 <small><?php echo get_field("intro_sub"); ?></small>
				</div>
			</section>

			<section class="hero">
				<?php $image = get_post_thumbnail_id(); ?>
				<figure>
					<img
						draggable="false"
						alt=""
						src="<?php echo wp_get_attachment_image_src($image, 'micro')[0]; ?>"
						sizes="auto"
						data-srcset="<?php echo wp_get_attachment_image_srcset($image, 'large'); ?>"
						class="lazyload" />
				</figure>
			</section>

			<section class="about">
				<h2>About</h2>
				<p><?php echo get_field("about_main"); ?></p>
				<p class="sub"><?php echo get_field("about_sub"); ?></p>
			</section>

			<section class="glance">
				<div class="grid">
					<div class="cell">
						<h5>Spacious</h5>
						<p><small>4000 sqft &mdash; two floor space</small></p>
					</div>
					<div class="cell">
						<h5>Group Worthy</h5>
						<p><small>Capacity for 170 cocktails &amp; 120 seats</small></p>
					</div>
					<div class="cell">
						<h5>Dining Options</h5>
						<p><small>Full kitchen — bring in the caterer &amp; bar service of your choice</small></p>
					</div>
					<div class="cell">
						<h5>Party Starter</h5>
						<p><small>Quality sound system for iPhone &amp; iPod or a full DJ</small></p>
					</div>
					<div class="cell">
						<h5>Be Heard</h5>
						<p><small>Wired &amp; wireless microphones are available</small></p>
					</div>
					<div class="cell">
						<h5>Internet</h5>
						<p><small>Private wifi access</small></p>
					</div>
				</div>
			</section>

			<section class="form-modal">
				<?php get_template_part( 'partials/content', 'contact' ); ?>
			</section>

			<section class="social">
				<p><a href="https://www.facebook.com/SeattleCathedral/" target="_blank"><i class="fab fa-facebook"></i></a><a href="https://twitter.com/The_Cathedral" target="_blank"><i class="fab fa-twitter"></i></a><a href="http://instagram.com/seattlecathedral" target="_blank"><i class="fab fa-instagram"></i></a></p>
			</section>

			<section class="foot">
				<p><small>&copy; <?php the_date('Y'); ?> Cathedral. <a href="mailto:info@seattlecathedral.com">info@seattlecathedral.com</a></small></p>
			</section>

			<section class="thankyou">
				<div>
					<h2>Thank you!</h2>
					<p>You will receive a confirmation email soon.</p>
				</div>
			</section>

		<?php endwhile; endif; ?>

	</main>

<?php get_footer(); ?>
