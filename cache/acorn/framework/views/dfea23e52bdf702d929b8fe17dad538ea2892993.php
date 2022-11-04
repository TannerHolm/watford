<?php $__env->startSection('content'); ?>
  
  <video poster="<?= get_field('background_video_poster_image')['url']; ?>" loop="true" playsinline="true" autoplay="true" muted="true" class="home-video" data-src="<?= get_field('background_video')['url']; ?>"> </video>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/tannerholm/Sites/watford/wp-content/themes/harc/resources/views/template-home.blade.php ENDPATH**/ ?>