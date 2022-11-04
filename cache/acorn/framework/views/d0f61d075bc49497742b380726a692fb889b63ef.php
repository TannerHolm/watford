<?php ($number = get_sub_field('number')); ?>
<?php ($number_color = get_sub_field('number_color')); ?>
<?php ($title = get_sub_field('title')); ?>
<?php ($description = get_sub_field('description')); ?>
<?php ($image = get_sub_field('image')); ?>
<?php ($layout = get_sub_field('choose_layout')); ?>
<?php ($background_image = get_sub_field('background_image')); ?>
<?php ($image_size = get_sub_field('image_size')); ?>
<?php ($background_color = get_sub_field('background_color')); ?>
<?php ($cta_link = get_sub_field('cta_link')); ?>
<?php ($cta_text = get_sub_field('cta_text')); ?>
<?php ($cta_background_color = get_sub_field('cta_background_color')); ?>
<?php ($cta_font_color = get_sub_field('cta_font_color')); ?>
<?php ($font_color = get_sub_field('font_color')); ?>
<?php ($margin_top = get_sub_field('margin_top')); ?>
<?php if($background_image): ?>
<section class="image-title boxed <?php if($font_color): ?> font-color <?php endif; ?>" data-color="<?php echo e($font_color); ?>" style="background-image:url(<?php echo e($background_image['url']); ?>); background-color: <?php echo e($background_color); ?>; margin-top: <?php echo e($margin_top); ?>;">
    <?php else: ?>
    <section class="image-title boxed <?php if($font_color): ?> font-color <?php endif; ?>" data-color="<?php echo e($font_color); ?>" style="background-color: <?php echo e($background_color); ?>;color: <?php echo e($font_color); ?>;margin-top: <?php echo e($margin_top); ?>;">
<?php endif; ?>
    <div class="row <?php echo e($layout); ?> image-<?php echo e($image_size); ?>">
        <div class="column img-column">
            <img src="<?php echo e($image['url']); ?>"/>
        </div>
        <div class="column">
            <div class="text-column-inner">
                <div class="title-wrapper">
                    <span class="title">
                        <?php echo $title; ?>

                    </span>
                </div>
                <div class="description">
                    <?php echo $description; ?>

                </div>
                <div class="cta">
                    <a style="background-color:<?php echo e($cta_background_color); ?>; border-color:<?php echo e($cta_font_color); ?>; color: <?php echo e($cta_font_color); ?>;" href="<?php echo e($cta_link); ?>" class="button"><?php echo e($cta_text); ?></a>
                </div>
            </div>
        </div>
    </div>
</section><?php /**PATH /Users/tannerholm/Sites/benecard/wp-content/themes/harc/resources/views/partials/image-text-cta.blade.php ENDPATH**/ ?>