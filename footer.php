			<footer>
				<?php get_template_part( 'partials/content', 'contact' ); ?>

				<section class="social">
					<p><a href="https://www.facebook.com/SeattleCathedral/" target="_blank"><i class="fab fa-facebook"></i></a><a href="https://twitter.com/The_Cathedral" target="_blank"><i class="fab fa-twitter"></i></a><a href="http://instagram.com/seattlecathedral" target="_blank"><i class="fab fa-instagram"></i></a></p>
				</section>

				<section class="foot">
					<p><small>&copy; <?php the_date('Y'); ?> Cathedral &mdash; <a href="mailto:info@seattlecathedral.com">info@seattlecathedral.com</a> &mdash; <a href="<?php echo site_url('/privacy-policy', 'http'); ?>">Privacy Policy</a></small></p>
				</section>
			</footer>
			<?php wp_footer(); ?>
	</body>
</html>
