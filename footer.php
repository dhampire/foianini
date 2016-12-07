<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
  <footer id="footer" class="col-xs-12 col-lg-12 source-org vcard copyright" role="contentinfo">
      <div class="col-xs-12 col-sm-12 col-lg-6">
        <div class="col-xs-12 col-sm-6 col-lg-7">
          <div class="col-xs-12 direccion">
            <div class="col-xs-12 col-lg-2">
              <a href="https://goo.gl/maps/7MXmJnAmm4s"><span class="icon-pin"></span></a>
            </div>
            <div class="col-xs-12 col-lg-10 direccion-texto">
              <a href="https://goo.gl/maps/7MXmJnAmm4s" target="_blank">
                <span><strong>Ingreso principal: </strong>Calle Chuquisaca #737<br><strong>Emergencias:</strong> Av. Irala # 468</span><br>
                Santa Cruz - Bolivia
              </a>
            </div>

          </div>  
        </div>
      </div>

      <div class="col-xs-12 col-md-3 col-lg-3 col-lg-offset-3">
          <div class="logos__">
            <a href="#">
              <img class="logos__img" src="<?php echo get_template_directory_uri(); ?>/img/vitalia.png" alt="">
            </a>
            <a href="#">
              <img class="logos__img" src="<?php echo get_template_directory_uri(); ?>/img/integrate.png" alt="">
            </a>
          </div>
      </div>
  </footer>

    <center>	<small>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></small></center>

	<?php wp_footer(); ?>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/search.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/classie.js"></script>

  </main>
</div>
</body>

</html>
