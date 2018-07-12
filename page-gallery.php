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

					<?php foreach( $images as $image ): ?>
						<figure>
							<button><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></button>
						</figure>
					<?php endforeach; ?>

					</gallery>
				<?php endif; ?>

			<?php endwhile; ?>

		</section>

	</main>

<?php get_footer(); ?>
