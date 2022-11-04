<?php $__env->startSection('content'); ?>
    
    <?php if(have_rows('modules')): ?>
        <?php while(have_rows('modules')): ?> <?php (the_row()); ?>
  
  
            <?php if( get_row_layout() == 'slider' ): ?>
                <?php ( $slides = get_sub_field('slide')); ?>
                <?php ( $boxes = get_sub_field('box_nav')); ?>
                <?php echo $__env->make('partials.slider', array('slide' => $slides, 'boxes' => $boxes), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php elseif( get_row_layout() == 'primary_title' ): ?>
                <?php ( $title = get_sub_field('title')); ?>
                <?php ( $description = get_sub_field('description')); ?>
            
                <?php echo $__env->make('partials.title', array('title' => $title, 'description' => $description), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <?php elseif( get_row_layout() == 'image_text_columns' ): ?>
            
                <?php echo $__env->make('partials.image-text', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <?php elseif( get_row_layout() == 'image_text_columns_cta' ): ?>
             
                <?php echo $__env->make('partials.image-text-cta', array('size' => 'boxed'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <?php endif; ?>
            
        <?php endwhile; ?>
    <?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/tannerholm/Sites/benecard/wp-content/themes/harc/resources/views/template-home.blade.php ENDPATH**/ ?>