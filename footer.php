<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
<footer id="footer" class="col-xs-12 col-lg-12 source-org vcard copyright" role="contentinfo">
    <div class="col-xs-12 col-sm-12 col-lg-6">
      <div class="col-xs-12 col-sm-6 col-lg-6">
        <div class="col-xs-12 telefono">
          <div class="col-xs-12 col-sm-3 col-lg-3">
            <a href="tel:+591-3-3362211"><span class="icon-telefono"></span></a>
          </div>
          <div class="col-xs-12 col-sm-6 col-lg-9">
            <span id="numero">
            <a href="tel:+591-3-3362211">
              +591(3)<br /><span class="grande">336 2211<span>
            </a>
            </span>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-lg-6">
        <div class="col-xs-12 direccion">
          <div class="col-xs-12 col-sm-3 col-lg-2">
            <a href="#"><span class="icon-pin"></span></a>
          </div>
          <div class="col-xs-12 col-sm-9 col-lg-10 textto">
            <a href="#">
              <span class="texto"><strong>Ingreso principal: </strong>Calle Chuquisaca #737<br><strong>Emergencias:</strong> Av. Irala # 468<br> Santa Cruz  - Bolivia</span>
          
            </a>
          </div>

        </div>  
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-lg-3">
        <div class="social">
          <a href="http://jlarteaga.com/foianini/blog"><img src="<?php echo get_template_directory_uri(); ?>/img/social-blog.png" alt=""></a>
          <a href="#"><span class="icon-facebook"></span></a>
          <a href="#"><span class="icon-youtube"></span></a>
          <a href="http://jlarteaga.com/foianini/contacto"><span class="icon-mail"></span></a>
        </div>
    </div>

    <div class="col-xs-12 col-md-3 col-lg-3">
      <div id="ong">
        <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
      </div>
    </div>
</footer>

    <center>	<small>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></small></center>

	<?php wp_footer(); ?>
</div>
</body>

</html>
