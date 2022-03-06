<div class="card text-center " style=" background: #040b14; color:#fff;
font-family: Poppins, sans-serif; ">
    <div class="card-body">
        <?php $__currentLoopData = App\Models\About::get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <h5 class="card-title" ><?php echo e($item->name_surname); ?></h5>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div><?php /**PATH C:\AppServ\www\portfolio\public\views/frontend/layouts/title.blade.php ENDPATH**/ ?>