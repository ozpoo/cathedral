<?php get_header(); ?>

	<main role="main">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

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
				<section class="controls">
					<button class="leftButton"></button>
					<button class="rightButton"></button>
				</section>
				<section class="flky">
					<?php
					$images = get_field('hero_slider');
					if( $images ): ?>
		        <?php foreach($images as $image): ?>
							<figure>
								<img
									draggable="false"
									alt=""
									src="<?php echo wp_get_attachment_image_src($image['id'], '02')[0]; ?>"
									sizes="auto"
									data-srcset="<?php echo wp_get_attachment_image_srcset($image['id'], '09'); ?>"
									class="lazyload" />
							</figure>
		        <?php endforeach; ?>
					<?php endif; ?>
				</section>
				<div class="gallery-link">
					<a href="<?php echo site_url('/gallery/', 'http'); ?>">Tour The<br>Space</a>
				</div>
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

		<?php endwhile; endif; ?>

	</main>

<?php get_footer(); ?>
