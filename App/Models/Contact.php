<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

    public $timestamps  = false;
    protected $table = "contact";
    protected $primaryKey = "id";


    protected $fillable = [
        "email", 
        "message",  
        "name_surname",
    ];

}

?>