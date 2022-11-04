<footer class="content-info">
  <div class="row">
    <div class="column logo">
      <a class="brand" href="<?php echo e(home_url('/')); ?>">
        <img src="<?= \Roots\asset('images/logo.png'); ?>">
      </a>
      <ul class="socials">
        <?php ($socials = get_field('social', 'options')); ?>
        <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li>
            <a href="<?php echo e($social['link']); ?>">
              <img src="<?php echo e($social['icon']['url']); ?>" alt="">
            </a>
          </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
    <?php ($columns = get_field('menu_columns', 'options')); ?>
    <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="column">
        <h4><?php echo e($column['heading']); ?></h4>
        <ul class="column-menu">
          <?php $__currentLoopData = $column['menu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="menu-item">
              <a href="<?php echo e($menu['link']); ?>"><?php echo e($menu['title']); ?></a>
            </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</footer>
<?php /**PATH /Users/tannerholm/Sites/benecard/wp-content/themes/harc/resources/views/sections/footer.blade.php ENDPATH**/ ?>