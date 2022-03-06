

<?php $__env->startPush("css"); ?>
<style>
             .formMargin{ 
                      margin-top:20px;
             }

              .imageAddItem{
                      position: relative;
              }
              .imageAddItem input{
                      position: absolute;
                      left: 0;
                      top: 0;
                      right: 0;
                      bottom: 0;
                      width: 100%;
                      height: 100%;
                      opacity: 0;
                      z-index: 66;
                      cursor: pointer;
              }
                .dragItem{
                        position: absolute;
                        z-index: 99;
                        right: 0;
                        top: 0;
                        width: 30px;
                        height: 30px;
                        background: #fff;
                        border: 1px solid #949494;
                        border-radius: 5px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        cursor: grab;
                }
 


  </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection("content"); ?>
<div style="background-color: #212429">
     <h5 style="color:antiquewhite; text-align:center;">Proje Ekle</h5>
    </div>
<div class="container-fluid formMargin">

    
    <div class="bg-white p-4 border rounded shadow">
            <form action="<?php echo e(base_url("admin/projectAdd")); ?>" method="POST"  enctype="multipart/form-data"  class="row" >
               
                <div class="form-group col-md-12">
                    <label>Proje Görselleri</label>

                    <div class="row" id="imgSort">
                        <div class="col-md-2 p-2">
                                <div class="border rounded p-2 bg-light imageAddItem" style="height: 150px">
                                        <div class="dragItem"><i class="fas fa-arrows-alt"></i></div>
                                        <input type="file" class="form-control imgInput "  accept="image/*" name="project_images[1]">
                                        <img width="100%" height="100%" src="https://www.lifewire.com/thmb/P856-0hi4lmA2xinYWyaEpRIckw=/1920x1326/filters:no_upscale():max_bytes(150000):strip_icc()/cloud-upload-a30f385a928e44e199a62210d578375a.jpg" >
                                </div> 
                        </div>

                        <div class="col-md-2 p-2">
                                <div class="border rounded p-2 bg-light imageAddItem" style="height: 150px">
                                        <div class="dragItem"><i class="fas fa-arrows-alt"></i></div>
                                        <input type="file" class="form-control imgInput "  accept="image/*" name="project_images[2]">
                                        <img width="100%" height="100%" src="https://www.lifewire.com/thmb/P856-0hi4lmA2xinYWyaEpRIckw=/1920x1326/filters:no_upscale():max_bytes(150000):strip_icc()/cloud-upload-a30f385a928e44e199a62210d578375a.jpg" >
                                </div> 
                        </div>

                        <div class="col-md-2 p-2">
                                <div class="border rounded p-2 bg-light imageAddItem" style="height: 150px">
                                        <div class="dragItem"><i class="fas fa-arrows-alt"></i></div>
                                        <input type="file" class="form-control imgInput "  accept="image/*" name="project_images[3]">
                                        <img width="100%" height="100%" src="https://www.lifewire.com/thmb/P856-0hi4lmA2xinYWyaEpRIckw=/1920x1326/filters:no_upscale():max_bytes(150000):strip_icc()/cloud-upload-a30f385a928e44e199a62210d578375a.jpg" >
                                </div> 
                        </div>

                            
                           
                    </div>

                    
            </div>
                    <div class="form-group col-md-6">
                            <label>Proje Adı</label>
                            <input type="text" class="form-control" placeholder="Proje Adı" required name="name" >
                    </div>

                    <div class="form-group col-md-6">
                            <label>Başlık</label>
                            <input type="text" class="form-control" required name="title" placeholder="Başlık" >
                    </div>

                    <div class="form-group col-md-6 formMargin">
                            <label>Proje Tarihi</label>
                            <input type="date" class="form-control" required name="date" placeholder="Proje Tarihi">
                    </div>

                    <div class="form-group col-md-6 formMargin">
                            <label>Proje Url</label>
                            <input type="text"  class="form-control" placeholder="Proje URL" required name="url" >
                    </div>

                    <div class="form-group col-md-12 formMargin">
                        <label>Açıklama</label>
                        <textarea name="description"  placeholder="Proje Açıklaması" class="form-control" rows="5"></textarea>
                    </div>
    

                  <div class="col-md-12 formMargin">
                    <button type="submit" class="btn btn-outline-dark">Kaydet</button>
                  </div>




            </form>
    </div>
   


</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script><!--görseller sıralamaya tabi olabilsin diye shortable ı qjuery den kullnadık-->


    <script>
        
        
        $(".imgInput").on("change", function(){
                const input = this;
                const file = $(input).prop("files")[0]
                
                const reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function(){ 
                        $(input).next().attr("src", reader.result)
                }
        })
           
        $("#imgSort").sortable({
                placeholder: "col-md-2 bg-light border rounded shadow",
                update: function(event, ui){
                        $("#imgSort .col-md-2").each( function( index, element ){
                                $(element).find('input[type="file"]').attr("name", `product_images[${index+1}]` )
                        } );
                }
        })
    
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make("backend.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\AppServ\www\portfolio\public\views/backend/projectAdd.blade.php ENDPATH**/ ?>