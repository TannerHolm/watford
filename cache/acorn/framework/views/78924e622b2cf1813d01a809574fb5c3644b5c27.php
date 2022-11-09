<article class="project">
  <img src="<?= get_field('featured_image')['url']; ?>">

  <div class="info-banner">
    <div class="row">
      <div class="title">
        <h1><?= get_the_title(); ?></h1>
      </div>
      <div class="details">
        <?php if (have_rows('project_details')) : ?><?php while (have_rows('project_details')) : the_row(); ?>
        <div class="detail">
          <div class="detail-title">
            <?= get_sub_field('title'); ?>
          </div>
          <div class="detail-content">
            <?= get_sub_field('content'); ?>
          </div>  
        </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
  <div class="project-gallery">
      <?php if (have_rows('project_gallery')) : ?><?php while (have_rows('project_gallery')) : the_row(); ?>
        <?php if( get_row_layout() == '2_column_row' ): ?>
        <?php ($images = get_sub_field('gallery')); ?>
        <div class="two-column">
          <div class="row">
            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <img src="<?php echo e($image['url']); ?>">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
        
        <?php elseif(get_row_layout() == '1_column_row'): ?>
        <div class="one-column">
          <div class="row">
            <?php ($images = get_sub_field('gallery')); ?>
            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <img src="<?php echo e($image['url']); ?>">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
        
        <?php else: ?>
        <?php endif; ?>
      <?php endwhile; endif; ?>
  </div>
  <div class="projects-link">
    <a href="/projects/">Back To Projects</a>
  </div>
</article>
<?php /**PATH /Users/tannerholm/Sites/watford/wp-content/themes/harc/resources/views/partials/content-project.blade.php ENDPATH**/ ?>