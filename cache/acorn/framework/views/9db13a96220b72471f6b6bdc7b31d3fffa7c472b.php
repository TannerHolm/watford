<?php $__env->startSection('content'); ?>

  <section class="services">
    <div class="row">
      <div class="column text-column">
        <div class="services-content">
          <ul>
            <li class="content-item intro">
              <div class=" introduction">
                <?= get_field('introduction'); ?>
              </div>
              <img class="hidden-tablet-up" src="<?= get_field('services_image')['url']; ?>" alt="">
            </li>
              <?php ($content_sections = get_field('content_sections')); ?>
              <?php $__currentLoopData = $content_sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($loop->first): ?>
                  <li class="content-item first">
                    <h2 class="content-title">
                      <span><?php echo e($content['subtitle']); ?></span>
                      <?php echo e($content['title']); ?>

                    </h2>
                    <svg class="accordion" xmlns="http://www.w3.org/2000/svg" width="13.831" height="13.831" viewBox="0 0 13.831 13.831">
                      <line id="Line_2" data-name="Line 2" y2="12.831" transform="translate(6.916 0.5)" fill="none" stroke="#3d4e56" stroke-linecap="round" stroke-width="1"></line>
                      <line id="Line_3" data-name="Line 3" y2="12.831" transform="translate(13.331 6.916) rotate(90)" fill="none" stroke="#3d4e56" stroke-linecap="round" stroke-width="1"></line>
                    </svg>
                    <div class="content">
                      <?php echo $content['content']; ?>

                    </div>
                  </li>
                <?php else: ?>
                <li class="content-item">
                  <h2 class="content-title">
                    <span><?php echo e($content['subtitle']); ?></span>
                    <?php echo e($content['title']); ?>

                  </h2>
                  <svg class="accordion" xmlns="http://www.w3.org/2000/svg" width="13.831" height="13.831" viewBox="0 0 13.831 13.831">
                    <line id="Line_2" data-name="Line 2" y2="12.831" transform="translate(6.916 0.5)" fill="none" stroke="#3d4e56" stroke-linecap="round" stroke-width="1"></line>
                    <line id="Line_3" data-name="Line 3" y2="12.831" transform="translate(13.331 6.916) rotate(90)" fill="none" stroke="#3d4e56" stroke-linecap="round" stroke-width="1"></line>
                  </svg>
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
        <div class="column img-column">
          <img src="<?= get_field('services_image')['url']; ?>" alt="">
        </div>

      </div>
  </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /www/watford_857/public/wp-content/themes/harc/resources/views/template-services.blade.php ENDPATH**/ ?>