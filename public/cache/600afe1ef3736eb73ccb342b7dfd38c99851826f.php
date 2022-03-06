

<?php $__env->startPush("css"); ?>
<style>
  .formMargin{ 
    margin-top:20px;
  }
  label{
      color:#0f0b20;
      font-weight: bold
  }


  </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection("content"); ?>
<div style="background-color: #212429">
     <h5 style="color:antiquewhite; text-align:center;">Hakkımda Güncelle</h5>
    </div>
<div class="container-fluid formMargin">
    <?php echo $__env->make('backend.layouts.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <div class="bg-white p-4 border rounded shadow">
        <?php $__currentLoopData = App\Models\About::get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <form action="<?php echo e(base_url("admin/update-about")); ?>" id="editForm" method="POST"  enctype="multipart/form-data"  class="row" >
                     <input type="hidden" name="id" value="<?php echo e($item->id); ?>">
                    
                     <div class="form-group col-md-4">
                        <label>Profil Fotoğrafı</label>
                        <input type="file" class="card-img-top" value="<?php echo e(base_url($item->image_path."/".$item->original_image)); ?>" alt="..." />
                     </div><div class="form-group col-md-8 formMargin" ></div>
                  
                     <div class="form-group col-md-6">
                            <label>Ad-Soyad</label>
                            <input type="text" class="form-control" value="<?php echo e($item->name_surname); ?>" required name="name_surname" >
                    </div>

                    <div class="form-group col-md-6">
                            <label>E-Posta</label>
                            <input type="email" class="form-control" required name="email" value="<?php echo e($item->email); ?>" >
                    </div>

                    <div class="form-group col-md-6 formMargin">
                            <label>Doğum Tarihi</label>
                            <input type="date" class="form-control" required name="birthday" value="<?php echo e($item->birthday); ?>">
                    </div>

                    <div class="form-group col-md-6 formMargin">
                            <label>Telefon</label>
                            <input type="phone"  class="form-control" value="<?php echo e($item->phone); ?>" required name="phone" >
                    </div>

                    <div class="form-group col-md-6 formMargin">
                        <label>Adres
                            <small style="font-size:13px;">&nbsp; &nbsp; &nbsp; &nbsp; (Yalnızca il ve ilçe belirtiniz.)</small></label>
                        <input type="text"  class="form-control" value="<?php echo e($item->city); ?>" required name="city" >
                     </div>



                    <div class="form-group col-md-6 formMargin">
                        <label>Meslek</label>
                        <input type="text" class="form-control" value="<?php echo e($item->job); ?>" required name="job" >
                    </div>

                    <div class="form-group col-md-12 formMargin">
                        <label>Üniversite Adı</label>
                        <input type="text"  class="form-control" value="<?php echo e($item->univercity_name); ?>" required name="univercity_name" >
                    </div>

                    <div class="form-group col-md-6 formMargin">
                        <label>Bölüm</label>
                        <input type="text"  class="form-control" value="<?php echo e($item->department); ?>" required name="department" >
                    </div>

                    <div class="form-group col-md-6 formMargin">
                        <label>Derece</label>
                        <input type="text"  class="form-control" value="<?php echo e($item->department); ?>" required name="degree" >
                    </div>
                    
                    <div class="form-group col-md-12 formMargin">
                        <label>Hakkımda</label>
                        <textarea name="about_text"  class="form-control" rows="5"><?php echo e($item->about_text); ?></textarea>
                    </div>
    

                  <div class="col-md-12 formMargin">
                    <button type="submit" class="btn btn-outline-dark">Güncelle</button>
                  </div>




            </form>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("backend.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\AppServ\www\portfolio\public\views/backend/about.blade.php ENDPATH**/ ?>