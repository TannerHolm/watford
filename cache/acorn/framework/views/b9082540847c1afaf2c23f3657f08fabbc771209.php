<?php $__env->startSection('content'); ?>

  <section class="contact">
    <div class="row">
      <div class="column text-column">
        <div class="contact-content">
          <ul>
            <li class="content-item intro">
              <div class=" introduction">
                <?= get_field('introduction'); ?>
              </div>
              <img class="hidden-tablet-up" src="<?= get_field('contact_image')['url']; ?>" alt="">
            </li>
            <li class="content-item first">
              <div class="content">
               <?= get_field('form'); ?>
              </div>
            </li>
            <li class="content-item address">
              <div class="content">
                <?= get_field('address'); ?>
              </div>
            </li>
            </ul>
          </div>
        </div>
        <div class="column img-column">
          <img src="<?= get_field('contact_image')['url']; ?>" alt="">
        </div>

      </div>
  </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /www/watford_857/public/wp-content/themes/harc/resources/views/template-contact.blade.php ENDPATH**/ ?>