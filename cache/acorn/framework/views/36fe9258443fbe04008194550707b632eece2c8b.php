<?php $__env->startSection('content'); ?>
  
  <video width="100%" height="100%" playsinline autoplay="autoplay" loop="true" autoplay="autoplay" muted class="home-video">
    <source src="<?= get_field('background_video')['url']; ?>">
    <img src="<?= get_field('background_video_poster_image')['url']; ?>" alt="">
  </video>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /www/kinsta/public/watford/wp-content/themes/harc/resources/views/template-home.blade.php ENDPATH**/ ?>