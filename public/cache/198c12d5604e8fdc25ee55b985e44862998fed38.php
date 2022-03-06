



<?php $__env->startSection("content"); ?>
<div style="background-color: #212429">
    <h5 style="color:antiquewhite; text-align:center;">Projeler</h5>
   </div>
<main>
    <div class="card shadow mb-4">
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Proje Adı</th>
                            <th>Proje Başlık</th>
                            <th>Proje Açıklama</th>
                            <th>Proje Url</th>
                            <th>Proje Tarihi</th>
                        </tr>
                    </thead>
                   
                    <tbody>
    
                        <?php $__currentLoopData = App\Models\GetProjectsView::orderby('id','desc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <tr>
                                <td><?php echo e($item->id); ?></td>
                                <td><?php echo e($item->name); ?></td>
                                <td><?php echo e($item->title); ?></td>
                                <td><?php echo e($item->description); ?></td>
                                <td><?php echo e($item->url); ?></td>
                                <td><?php echo e($item->date); ?></td>
                             </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
                       
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("backend.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\AppServ\www\portfolio\public\views/backend/projectList.blade.php ENDPATH**/ ?>