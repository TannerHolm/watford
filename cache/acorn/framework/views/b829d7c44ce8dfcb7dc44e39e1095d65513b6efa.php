<section class="slider">
    <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="slide" style="background-image:url(<?php echo e($slide['slide_image']['url']); ?>);">
            <div class="slide-inner">
                <div class="slide-content">
                    <?php echo $slide['slide_title']; ?>

                    <div class="slide-description"><?php echo $slide['slide_description']; ?></div>
                    <a href="<?php echo e($slide['slide_cta_link']); ?>"><?php echo e($slide['slide_cta_text']); ?></a>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>

<section class="box-nav">
    <div class="box-nav-inner">
        <?php $__currentLoopData = $boxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $box): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e($box['box_link']); ?>" class="box" style="background-color:<?php echo e($box['box_color']); ?>;">
                <?php echo $box['box_title']; ?>

                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                    <path id="circle-arrow-right" d="M14.312,7.126a.449.449,0,0,0-.623,0,.437.437,0,0,0,0,.619l5.819,5.818H7.438a.438.438,0,1,0,0,.875h12.07l-5.813,5.813a.437.437,0,0,0,.619.619l6.563-6.563a.437.437,0,0,0,0-.619ZM14,0A14,14,0,1,0,28,14,14,14,0,0,0,14,0Zm0,27.125A13.125,13.125,0,1,1,27.125,14,13.142,13.142,0,0,1,14,27.125Z" fill="#fff"/>
                  </svg>
                  
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section><?php /**PATH /Users/tannerholm/Sites/benecard/wp-content/themes/harc/resources/views/partials/slider.blade.php ENDPATH**/ ?>