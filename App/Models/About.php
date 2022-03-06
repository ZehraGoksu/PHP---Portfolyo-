<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model {

    public $timestamps  = false;
    protected $table = "about";
    protected $primaryKey = "id";


    protected $fillable = [
        "email", 
        "password",  
        "name_surname",
        "birthday",
        "phone",
        "city",
        "about_text",
        "job",
        "degree",
        "univercity_name",
        "department",
        "image_path",
        "original_image"
							
    ];

}

?>