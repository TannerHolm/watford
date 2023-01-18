<section class="navigation">
    <div class="row">
        <div class="column img-column" style="background-image:url(<?= get_field('navigation_image', 'option')['url']; ?>)"></div>
        <div class="column">
            <a href="#close" class="close">
                <svg xmlns="http://www.w3.org/2000/svg" width="25.693" height="24.721" viewBox="0 0 25.693 24.721">
                    <g id="Group_2" data-name="Group 2" transform="translate(139.846 677.861)">
                      <line id="Line_38" data-name="Line 38" x2="25" y2="24" transform="translate(-139.5 -677.5)" fill="none" stroke="#fff" stroke-width="1"/>
                      <line id="Line_39" data-name="Line 39" x1="25" y2="24" transform="translate(-139.5 -677.5)" fill="none" stroke="#fff" stroke-width="1"/>
                    </g>
                  </svg>                  
            </a>
            <?php if(has_nav_menu('primary_navigation')): ?>
            <nav class="nav-primary" aria-label="<?php echo e(wp_get_nav_menu_name('primary_navigation')); ?>">
              <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]); ?>

            </nav>
          <?php endif; ?>
          <a class="nav-logo" href="/">
            <img src="<?= get_field('navigation_logo', 'option')['url']; ?>" alt="<?= get_field('navigation_logo', 'option')['alt']; ?>">
          </a>
        </div>
    </div>
</section><?php /**PATH /www/watford_857/public/wp-content/themes/harc/resources/views/partials/navigation.blade.php ENDPATH**/ ?>