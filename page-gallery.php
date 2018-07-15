<?php get_header(); ?>

	<main role="main">

		<section>

			<h1><?php the_title(); ?></h1>

			<?php while (have_posts()) : the_post(); ?>

				<?php
				$images = get_field('gallery');
				$size = 'large';
				?>

				<?php if( $images ): ?>
					<gallery>
						<?php $count = 0; ?>
					<?php foreach( $images as $image ): ?>
						<figure>
							<button class="glry-open" data-index="<?php echo $count++; ?>?"><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></button>
						</figure>
					<?php endforeach; ?>
					</gallery>

					<slider>
						<nav>
							<button class="glry-close">&times;</button>
							<button class="glry-back">&larr;</button>
							<button class="glry-forth">&rarr;</button>
						</nav>
						<section class="glry">
							<?php foreach( $images as $image ): ?>
								<figure>
									<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
								</figure>
							<?php endforeach; ?>
						</section>
					</slider>
				<?php endif; ?>

			<?php endwhile; ?>

		</section>

	</main>

<?php get_footer(); ?>
