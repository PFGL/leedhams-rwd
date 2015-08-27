			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrapper">

                    <?php get_sidebar ('contact');?>

                    <?php get_sidebar ('legal');?>

                    <?php // get_sidebar ('testimonials');?>

				</div>

                <div class="subsidary-statement">
                    <a href="http://www.pfgl.co.uk"><img src="<?php echo get_template_directory_uri(); ?>/library/images/perspective-logo-small.png" alt="<?php bloginfo('name'); ?>"></a>
                    <p><?php bloginfo('name'); ?> is a subsidiary of Perspective Financial Group Limited.</p>
                </div>


			</footer>
            <div class="cookie_layer">
                <div class="cookie_inner"><span class="cookie_icon">&nbsp;</span>
                    <div class="cookie_text">This website uses analytical cookies. By continuing to browse the site, you are agreeing to our use of cookies. To find out more about the analytical cookies we use and how to switch them off please follow this <a href="http://www.pfgl.co.uk/privacy-policy">link</a>.
                    </div>
                </div>
            </div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
