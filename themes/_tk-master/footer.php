<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container-fluid">
		<div class="row">
			<div class="site-footer-inner col-sm-12">

				<div class="site-info">
					<table style="width:100%"
					<tr>
						<th>
					<?php wp_nav_menu(
						array(
							'theme_location' 	=> 'footer',
							'depth'             => 2,
							'container'         => 'nav',
							'container_id'      => 'navbar-collapse',
							'container_class'   => 'collapse navbar-collapse',
							'menu_class' 		=> 'nav navbar-nav',
							'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
							'menu_id'			=> 'main-menu',
							'walker' 			=> new wp_bootstrap_navwalker()
						)
					); ?>
				</th>
				<th class="alignright">
					<!-- Social links for footer -->

					<ul class="wp-block-social-links is-style-pill-shape ">
						<li class="wp-social-link wp-social-link-facebook wp-block-social-link ">
						<a href="https://www.facebook.com/" aria-label="Facebook" rel="noopener nofollow" target="_blank" class="wp-block-social-link-anchor">
						<svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false">
							<path d="M12 2C6.5 2 2 6.5 2 12c0 5 3.7 9.1 8.4 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.3v7C18.3 21.1 22 17 22 12c0-5.5-4.5-10-10-10z"></path></svg></a></li>

<li class="wp-social-link wp-social-link-mail wp-block-social-link ">
	<a href="mailto:townsvillejazz@icloud.com" aria-label="Mail" rel="noopener nofollow" target="_blank" class="wp-block-social-link-anchor">
		 <svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false">
			 <path d="M20,4H4C2.895,4,2,4.895,2,6v12c0,1.105,0.895,2,2,2h16c1.105,0,2-0.895,2-2V6C22,4.895,21.105,4,20,4z M20,8.236l-8,4.882 L4,8.236V6h16V8.236z"></path></svg></a>
</li>
</ul>

				</th>
			</table>

			<a class="to-the-top alignright" href="#top">
						<span class="to-the-top-long">
							To the top <span class="arrow" aria-hidden="true">↑</span>						</span><!-- .to-the-top-long -->

					</a>
				</div><!-- close .site-info -->

			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>
