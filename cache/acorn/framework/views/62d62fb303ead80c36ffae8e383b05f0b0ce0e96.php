<?php ($number = get_sub_field('number')); ?>
<?php ($number_color = get_sub_field('number_color')); ?>
<?php ($title = get_sub_field('title')); ?>
<?php ($description = get_sub_field('description')); ?>
<?php ($image = get_sub_field('image')); ?>
<?php ($layout = get_sub_field('choose_layout')); ?>

<section class="image-title">
    <div class="row <?php echo e($layout); ?>">
        <div class="column img-column">
            <img src="<?php echo e($image['url']); ?>"/>
        </div>
        <div class="column">
            <div class="text-column-inner">
                <div class="title-wrapper">
                    <span class="number" style="background-color:<?php echo e($number_color); ?>;"><?php echo e($number); ?></span>
                    <span class="title">
                        <?php echo $title; ?>

                    </span>
                </div>
                <div class="description">
                    <?php echo $description; ?>

                </div>
            </div>
        </div>
    </div>
</section><?php /**PATH /Users/tannerholm/Sites/benecard/wp-content/themes/harc/resources/views/partials/image-text.blade.php ENDPATH**/ ?>