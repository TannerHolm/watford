<?php $__env->startSection('content'); ?>

  <section class="about">
    <div class="row">
        <div class="column img-column">
          <img src="<?= get_field('about_image')['url']; ?>" alt="">
        </div>
        <div class="column text-column">
          <div class="about-content">
            <ul>
              <?php ($content_sections = get_field('content_sections')); ?>
              <?php $__currentLoopData = $content_sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($loop->first): ?>
                  <li class="content-item">
                    <h2 class="content-title"><?php echo e($content['title']); ?></h2>
                    <div class="content">
                      <?php echo $content['content']; ?>

                    </div>
                  </li>
                  <li class="hidden-tablet-up">
                    <img src="<?= get_field('about_image')['url']; ?>" alt="">
                  </li>
                <?php else: ?>
                <li class="content-item">
                  <h2 class="content-title"><?php echo e($content['title']); ?></h2>
                  <div class="content">
                    <?php echo $content['content']; ?>

                  </div>
                </li>
                <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <a href="<?= get_field('page_link'); ?>" class="link"><span><?= get_field('page_link_text'); ?></span> ></a>
          </div>
        </div>
    </div>
  </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /www/watford_857/public/wp-content/themes/harc/resources/views/template-about.blade.php ENDPATH**/ ?>