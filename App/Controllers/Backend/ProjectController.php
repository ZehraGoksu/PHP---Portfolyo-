<?php

namespace App\Controllers\Backend;

use Core\Controller;
use App\Models\Project;
use App\Models\ProjectImages;

use Core\Upload;


class ProjectController extends Controller{

    public function AddProject(){      

        try{  
          


            Project::beginTransaction();
            ProjectImages::beginTransaction();

                $saveProject = [
                    "name" => $_POST["name"],
                    "title" => $_POST["title"] ,
                    "date" => $_POST["date"],
                    "url" => $_POST["url"],
                    "description" =>  $_POST["description"]
                ];


                $addProject = Project::create( $saveProject );
 
            if( $addProject ){
                
                $projectID = $addProject->id;
  

                $files = [];
                foreach ($_FILES['project_images'] as $k => $l) {
                  foreach ($l as $i => $v) {
                    if (!array_key_exists($i, $files)) {
                        $files[$i] = array();
                    }
                    $files[$i][$k] = $v;                  
                  }
                }
           
                foreach( $files  as $key =>  $file ){
                  if($file["size"] == 0 || $file["error"] > 0   ){
                    unset($files[$key]);
                  }
                }

  
                  foreach( $files as $file ){
                    $name = guid();
                    $directory = imgDir();

                 

                    $upload = new Upload($file  );

                    $small = $upload->resize(250)->prefix("small")->rename($name)->to( $directory);
                    $original = $upload->rename( $name)->to($directory);
                    
                     $saveImage = [
                         "project_id" =>  $projectID,
                         "original_image" => $original->getFile(),
                         "small_image" => "small_". $small->getFile(),
                         "image_path" => $directory
                     ];

                  $addImage = ProjectImages::create( $saveImage );

                   if(!$addImage){
                       throw "Resim yükleme işleminde hata meydane geldi";
                   }

                  }





        Project::commit();
        ProjectImages::commit();

        redirect("admin/projectList", true, "Proje ekleme işlemi başarılı.");

 
           

        }
        } catch( Exception $e ){

            Project::rollBack();
            ProjectImages::rollBack();

        
            
            redirect("admin/projectList", false, $e->getMessage()); 
            
        }





    }
    

}


?>