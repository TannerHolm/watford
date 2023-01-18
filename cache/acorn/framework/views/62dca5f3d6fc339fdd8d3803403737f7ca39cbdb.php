<?php echo $__env->make('sections.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  <main id="main" class="main" style="overflow:hidden;">
    <?php echo $__env->yieldContent('content'); ?>
  </main>

  <?php if (! empty(trim($__env->yieldContent('sidebar')))): ?>
    <aside class="sidebar">
      <?php echo $__env->yieldContent('sidebar'); ?>
    </aside>
  <?php endif; ?>

<?php echo $__env->make('sections.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>
  html {
    margin-top: 0 !important;
}
</style><?php /**PATH /www/watford_857/public/wp-content/themes/harc/resources/views/layouts/app.blade.php ENDPATH**/ ?>