<header class="banner">
  <div class="banner-inner">
    <a class="brand" href="<?php echo e(home_url('/')); ?>">
      <img src="<?= get_field('header_logo', 'option')['url']; ?>" alt="<?= get_field('header_logo', 'option')['alt']; ?>">
    </a>

    <a href="#menu" class="menu-trigger">
      <svg xmlns="http://www.w3.org/2000/svg" width="13.831" height="13.831" viewBox="0 0 13.831 13.831">
        <line id="Line_2" data-name="Line 2" y2="12.831" transform="translate(6.916 0.5)" fill="none" stroke="#3d4e56" stroke-linecap="round" stroke-width="1"/>
        <line id="Line_3" data-name="Line 3" y2="12.831" transform="translate(13.331 6.916) rotate(90)" fill="none" stroke="#3d4e56" stroke-linecap="round" stroke-width="1"/>
      </svg>      
    </a>
  </div>
</header>

<?php echo $__env->make('partials.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /www/watford_857/public/wp-content/themes/harc/resources/views/sections/header.blade.php ENDPATH**/ ?>