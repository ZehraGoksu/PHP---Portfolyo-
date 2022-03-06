



<?php $__env->startSection("content"); ?>
<div style="background-color: #212429">
    <h5 style="color:antiquewhite; text-align:center;">İletişim Mesajları</h5>
   </div>
<main>
    <div class="card shadow mb-4">
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mesaj Sahibi</th>
                            <th>E-posta</th>
                            <th>Mesajı</th>
                        </tr>
                    </thead>
                   
                    <tbody>
    
                        <?php $__currentLoopData = App\Models\Contact::orderby('id','desc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <tr>
                                <td><?php echo e($item->id); ?></td>
                                <td><?php echo e($item->name_surname); ?></td>
                                <td><?php echo e($item->email); ?></td>
                                <td><?php echo e($item->message); ?></td>
                                
                             </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
                       
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("backend.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\AppServ\www\portfolio\public\views/backend/contactList.blade.php ENDPATH**/ ?>