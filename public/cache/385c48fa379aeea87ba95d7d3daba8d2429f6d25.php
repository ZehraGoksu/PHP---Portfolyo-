



<?php $__env->startSection("content"); ?>

   <?php echo $__env->make("frontend.layouts.title", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section id="about" class="about">
      <?php $__currentLoopData = App\Models\About::get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
      <div class="container">
        
        
          <div class="section-title">
            <h2>Hakkımda</h2>
          </div>
  
          <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
              <img src="<?php echo e(base_url($item->image_path."/".$item->original_image)); ?>" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
              <h3><?php echo e($item->job); ?></h3>
              
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Doğum Tarihi:</strong> <span><?php echo e(format_date($item->birthday, "d/m/Y")); ?></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>E-posta:</strong> <span><?php echo e($item->email); ?></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Telefon:</strong> <span><?php echo e($item->phone); ?></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Adres:</strong> <span><?php echo e($item->city); ?></span></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Üniversite:</strong> <span><?php echo e($item->univercity_name); ?></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Derece:</strong> <span><?php echo e($item->degree); ?></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Bölüm:</strong> <span><?php echo e($item->department); ?></span></li>
                    
                  </ul>
                </div>
              </div>
              <p class="fst-italic">
                <?php echo e($item->about_text); ?>

              </p>
             
            </div>
          </div>
  
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </section>
      
      
      
  <?php $__env->stopSection(); ?>
<?php echo $__env->make("frontend.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\AppServ\www\portfolio\public\views/frontend/about.blade.php ENDPATH**/ ?>