<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BigBag
 */

?>
<style>
	.site-footer {
  background: #0d0d0d;
  color: #aaa;
  text-align: center;
  padding: 20px 15px;
  font-size: 14px;
  border-top: 1px solid rgba(255, 255, 255, 0.1);

}

.site-footer a {
  color: #fff;
  font-weight: 500;
  text-decoration: none;
  transition: color 0.3s ease;
}

.site-footer a:hover {
  color: #4ade80; /* м’ятний акцент */
}

</style>
	<!-- <footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bigbag' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'bigbag' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'bigbag' ), 'bigbag', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div>
	</footer> -->
	<!-- <footer class="site-footer">
  <p>© <?php echo date('Y'); ?> BigBag</p>
  <p>Designed & Developed by <a href="https://sitewebit.com" target="_blank" rel="noopener">Вячеслав Никифоров</a></p>
</footer> -->
<footer class="site-footer">
  <p>&copy; <?php echo date('Y'); ?> Компанія "BigBag". Всі права захищені. Розробка: <a href="https://nikweb.pro" target="_blank" rel="noopener">NikWeb</a></p>
  <p></p>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
