<?php

namespace App\Controllers\Backend;

use Core\Controller;

use App\Models\About;
use App\Models\Admins;

class AdminController extends Controller{


    public function IndexPage(){
      return $this->view("backend/homepage" ); 
    }

    public function LoginPage(){
      return $this->view("backend/login");
    }

   
    public function AboutPage(){
      return $this->view("backend/about");
    }

    public function ContactPage(){
        return $this->view("backend/contactList");
    }

    public function ProjectPage(){
        return $this->view("backend/projectList");
    }

    public function ProjectAddPage(){
        return $this->view("backend/projectAdd");
    }
  
  

  



    public function LoginForm(){ 

        
        $datas = Admins::where( [ "email" => $_POST['email'] ] )->first();
       
        if( $datas ){
         $datas = $datas->toArray();
         
         if(    passwordVerify($datas['password'], $_POST['password']  )   ){
   
             auth()->create( "adminAuth", [
               "id" => $datas['id'],
               "email" => $datas['email'],
               "name" => $datas['name_surname']
             ] );


   
          header("Location:". base_url("admin"));
   
   
         } else {
               redirect("admin/login", false, "E-posta veya şifre hatalıdır.");
         }
   
   
        } else {
          redirect("admin/login", false, "E-posta veya şifre hatalıdır.");
        }
   
   
       }
   
 
 
 
 
     public function UpdateAbout(){
 
       if( isset($_POST["id"]) ){
 
         $updateData = [ 
             "name_surname"  => $_POST["name_surname"],
             "email"         => $_POST["email"], 
             "birthday"      => $_POST["birthday"],
             "phone"         => $_POST["phone"],
             "city"          => $_POST["city"],
             "job"           => $_POST["job"],
             "univercity_name"   => $_POST["univercity_name"],
             "department"    => $_POST["department"],
             "degree"        => $_POST["degree"],
             "about_text"    => $_POST["about_text"]
         ];
 


 
         $update = About::where("id", $_POST["id"])->update( $updateData );
 
             if($update){
               redirect("admin/about", true, "Hakkımızda Bölümü Güncellendi");
             } else {
               redirect("admin/about", false, "Hakkımızda Bölümü Güncellenemedi");
             }
 
 
       
            }
     }
 
     
 
 
 }
 
 
 ?>