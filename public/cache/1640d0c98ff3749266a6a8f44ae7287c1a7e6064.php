

<?php $__env->startSection("content"); ?>

<div id="layoutError">
    <div id="layoutError_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mt-4">
                            <img class="mb-4 img-error" src="assets/img/error-404-monochrome.svg" />
                            <p class="lead">Bu sayfa bulunamadı.</p>
                            <a href="<?php echo e(base_url()); ?>">
                                <i class="fas fa-arrow-left me-1"></i>
                                Anasayfaya dönmek için tıklayınız !
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("frontend.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\AppServ\www\portfolio\public\views/frontend/404.blade.php ENDPATH**/ ?>