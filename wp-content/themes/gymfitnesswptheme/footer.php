          </div>
        </div>
        <footer class="layout-footer">
          <div class="container">
            <div class="footer-wrapper">
              <?php
              $args = array(
                'theme_location' => 'main-menu',
                'container' => 'nav',
                'container_class' => 'main-menu',
                'link_class' => 'nav-link black'
              );
              wp_nav_menu($args);
              ?>
              <span class="nav-link copyright-text black">&#169; All Rights Reserved. <?php echo get_bloginfo('name'), " ", date("Y") ?> </span>
            </div>
          </div>
        </footer>      
    </div>
    <?php wp_footer(); ?>
  </body>
</html>