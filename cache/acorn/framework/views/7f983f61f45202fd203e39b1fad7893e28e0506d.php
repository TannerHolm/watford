<?php $__env->startSection('content'); ?>

  <section class="projects">
    <?php global $query; ?><?php $query = new WP_Query([
      'post_type' => 'project'
    ]); ?>
    <?php if (empty($query)) : ?><?php global $wp_query; ?><?php $query = $wp_query; ?><?php endif; ?><?php if ($query->have_posts()) : ?><?php while ($query->have_posts()) : $query->the_post(); ?>
    <a href="<?= get_permalink(); ?>" class="row">
      <div class="column text-column">
        <h2 class="entry-title"><?= get_the_title(); ?></h2>
      </div>
      <div class="column img-column">
          <?= get_the_post_thumbnail(get_the_ID(), 'full'); ?>
      </div>
    </a>
      <hr>
      <?php endwhile; wp_reset_postdata(); endif; ?>
  </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /www/watford_857/public/wp-content/themes/harc/resources/views/template-projects.blade.php ENDPATH**/ ?>