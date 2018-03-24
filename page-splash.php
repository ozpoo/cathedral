<?php get_header(); ?>

	<main role="main">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<section class="logo">
				<p>
					<svg version="1.1" preserveAspectRatio="xMinYMax meet"
						 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
						 x="0px" y="0px" width="76.3px" height="76px" viewBox="0 0 76.3 76" style="enable-background:new 0 0 76.3 76;"
						 xml:space="preserve">
					<path class="st1" d="M74.2,57.3l-5.1-5.5L67,49.6l-2.2,2.1l-1.7,1.7l-0.2,0.2c-5.8,5.6-13.2,8.8-21,9.1V48.7l11.4-11.4L41.8,25.9
						V13.3c7.5,0.3,14.8,3.2,20.1,8.1l1.8,1.7l2,1.9l2-1.9l5.5-5.1l2.4-2.2l-2.4-2.2l-2.2-2C62.9,4.2,51.7,0,40.3,0C18.1,0,0,17,0,38
						c0,21,18.1,38,40.3,38c11.7,0,23-4.5,31.7-12.6l2-1.8l2.2-2.1L74.2,57.3z M27.4,37.3l11.4,11.4v13.9c-14-0.7-25.2-11.5-25.2-24.7
						c0-13.1,11.2-23.9,25.2-24.6v12.6L27.4,37.3z M40.3,46l-8.6-8.6l8.6-8.6l8.6,8.6L40.3,46z M70,61.2C61.9,68.8,51.3,73,40.3,73
						C19.8,73,3,57.3,3,38C3,18.7,19.8,3,40.3,3C51,3,61.5,6.9,69,13.7l2.2,2l-5.5,5.1l-1.8-1.7c-5.8-5.3-13.8-8.5-22.1-8.8v0h-1.5
						c0,0,0,0,0,0c0,0,0,0,0,0h-1.5v0C23.1,11.1,10.6,23.2,10.6,38c0,15.3,13.3,27.7,29.8,27.7c9.1,0,17.8-3.5,24.6-10l0.2-0.2l1.7-1.7
						l5.1,5.5L70,61.2z"/>
					</svg>
				 </p>
			</section>

			<div class="contact">
				<p><button class="toggle-contact"><small>Book an Event</small></button></p>
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
				<p><small>&copy; <?php the_date('Y'); ?> Cathedral. <a href="mailto:nate@seattlecathedral.com">nate@seattlecathedral.com</a></small></p>
			</section>

			<section class="thankyou">
				<div>
					<h2>Thank you!</h2>
					<p>You will receive a conformation email soon.</p>
				</div>
			</section>

		<?php endwhile; endif; ?>

	</main>

<?php get_footer(); ?>
