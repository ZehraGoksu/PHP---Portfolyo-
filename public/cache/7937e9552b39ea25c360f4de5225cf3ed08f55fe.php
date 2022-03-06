

<?php $__env->startSection("content"); ?>

<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
  <?php $__currentLoopData = App\Models\About::get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
  <div class="hero-container" data-aos="fade-in">
      <h1><?php echo e($item->name_surname); ?></h1>
      <p>I'm <span class="typed" data-typed-items="<?php echo e($item->job); ?>"></span></p>
    </div>
  </section>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("frontend.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\AppServ\www\portfolio\public\views/frontend/homepage.blade.php ENDPATH**/ ?>