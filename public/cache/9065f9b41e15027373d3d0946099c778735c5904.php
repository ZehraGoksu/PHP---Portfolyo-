
<?php $__env->startPush("css"); ?>
<style>
  .margin{
    margin-bottom: 50px;
  }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection("content"); ?>

 <?php echo $__env->make("frontend.layouts.title", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Portfolyo</h2>
        <ol>
          <li><a href="<?php echo e(base_url()); ?>">Anasayfa</a></li>
          <li>Portfolyo Detayları</li>
        </ol>
      </div>

    </div>
  </section>

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">
    <?php $__currentLoopData = App\Models\GetProjectsView::get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="row gy-4">

        <div class="col-lg-8">
          <div class=" portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">        
                <div 7>
                  <img src="<?php echo e(base_url($item->image_path."/".$item->original_image)); ?>"  height="300px">
                </div>
              </div>    
            </div>
        </div>
              <div class="portfolio-info col-4">
                <h3><?php echo e($item->name); ?></h3>
                <ul>
                  <li><strong>Proje Tarihi</strong>:<?php echo e(format_date($item->date, "d F Y")); ?> </li>
                  <li><strong>Proje URL</strong>: <a href="<?php echo e($item->url); ?>"><?php echo e($item->url); ?></a></li>
                </ul>
              </div>
            
          </div>
        

        <div class="margin">
          
          <div class="portfolio-info col-8">
            <h2><?php echo e($item->title); ?></h2>
            <p>
              <?php echo e($item->description); ?> </p>
          </div>
        </div>

      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
  </section><!-- End Portfolio Details Section -->

  <?php $__env->stopSection(); ?>
<?php echo $__env->make("frontend.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\AppServ\www\portfolio\public\views/frontend/portfolio.blade.php ENDPATH**/ ?>