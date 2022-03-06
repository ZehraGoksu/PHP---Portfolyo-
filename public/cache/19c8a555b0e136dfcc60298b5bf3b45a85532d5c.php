<?php if( isset( $_GET['status'] ) && isset( $_GET['message'] ) ): ?>
<div class="alert 
<?php echo e($_GET['status'] == "hata" || $_GET['status'] == "error" ? "alert-danger" : "alert-primary"); ?> 
 small">
    <?php echo e($_GET['message']); ?>

</div>
<?php endif; ?><?php /**PATH C:\AppServ\www\portfolio\public\views/backend/layouts/alert.blade.php ENDPATH**/ ?>