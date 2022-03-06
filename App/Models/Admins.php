<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model {

    public $timestamps  = false;
    protected $table = "admins";
    protected $primaryKey = "id";


    protected $fillable = [
        "email", 
        "password",  
        "name_surname"
    ];

}

?>