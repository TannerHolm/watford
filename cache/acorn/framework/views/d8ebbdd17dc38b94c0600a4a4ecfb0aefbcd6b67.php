<?php $__env->startSection('content'); ?>

  <section class="press">
    <div class="row">
      <?php if (have_rows('press_items')) : ?><?php while (have_rows('press_items')) : the_row(); ?>
        <div class="column">
          <p class="source">
            <?= get_sub_field('source'); ?>
          </p>
          <h4 class="title"><?= get_sub_field('title'); ?></h4>
          <div class="description">
            <?= get_sub_field('description'); ?>
          </div>
          <a href="<?= get_sub_field('link'); ?>" class="link"><span><?= get_sub_field('link_title'); ?></span> ></a>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/tannerholm/Sites/watford/wp-content/themes/harc/resources/views/template-press.blade.php ENDPATH**/ ?>