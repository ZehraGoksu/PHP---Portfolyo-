

<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <?php $__currentLoopData = App\Models\About::get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="profile">
        <img src="<?php echo e(base_url($item->image_path."/".$item->original_image)); ?>" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html"><?php echo e($item->name_surname); ?></a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class='bx bxl-github'></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="<?php echo e(base_url()); ?>" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Anasayfa</span></a></li>
          <li><a href="<?php echo e(base_url("about")); ?>" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Hakkımda</span></a></li>
         <li><a href="<?php echo e(base_url("portfolio")); ?>" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolyo</span></a></li>
          <li><a href="<?php echo e(base_url()); ?>" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>İletişim</span></a></li>
        </ul>
      </nav>
    </div>
  </header><?php /**PATH C:\AppServ\www\portfolio\public\views/frontend/layouts/menu.blade.php ENDPATH**/ ?>