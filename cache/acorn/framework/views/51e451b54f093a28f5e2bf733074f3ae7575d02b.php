<footer class="content-info">
  <div class="row">
    <div class="column social-copyright">
      <p class="copyright"><?= get_field('copyright', 'option'); ?></p>
      <?php if (have_rows('socials', 'option')) : ?>
      <ul class="socials">
        <?php if (have_rows('socials', 'option')) : ?><?php while (have_rows('socials', 'option')) : the_row(); ?>
        <li>
          <a href="<?= get_sub_field('link'); ?>" target="_blank">
            <?php if (get_sub_field('icon')) : ?>
            <?= get_sub_field('icon'); ?>
            <?php endif; ?>
          </a>
        </li>
        <?php endwhile; endif; ?>
      </ul>
      <?php endif; ?>
      <div class="footer-menu">
        <?php echo wp_nav_menu(['menu' => 'Footer Menu', 'menu_class' => 'nav', 'echo' => false]); ?>

      </div>
    </div>
    
    <div class="column logo-column">
      <?php if (get_field('logo', 'option')['type'] === 'image') : ?>
        <a href="/">
          <img src="<?= get_field('logo', 'option')['url']; ?>" alt="<?php echo e(get_bloginfo('name', 'display')); ?>" />
        </a>
       <?php endif; ?>
    </div>
    
    <div class="column made-by-column">
    <p><?= get_field('made_by', 'option'); ?></p>
    </div>
  
  </div>
</footer>
<?php /**PATH /www/kinsta/public/watford/wp-content/themes/harc/resources/views/sections/footer.blade.php ENDPATH**/ ?>