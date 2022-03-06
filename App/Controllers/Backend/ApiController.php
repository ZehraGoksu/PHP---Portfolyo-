<?php

namespace App\Controllers\Backend;

use Core\Controller;

use App\Models\Admins;
use App\Models\Users;

class ApiController extends Controller{
    
    public function getByAdminId ( $id ){
       
        $admin = Admins::find($id);

        if($admin){

            response( 
                [
                    "status" => true,
                    "message" => "Admin Bilgileri",
                    "data" => $admin
                ]
             );

        } else {

            response( 
                [
                    "status" => false,
                    "message" => "Admin Bilgileri Çekilemedi",
                    "data" => null
                ]
             );

        }
 

    }
    
    
    
}


?>