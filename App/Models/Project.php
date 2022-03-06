<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    public $timestamps  = false;
    protected $table = "projects";
    protected $primaryKey = "id";


    protected $fillable = [
        "name", 
        "title",  
        "description",
        "date",
        "url"
    ];

    public static function beginTransaction()
    {
        self::getConnectionResolver()->connection()->beginTransaction();
    }
    public static function commit()
    {
        self::getConnectionResolver()->connection()->commit();
    }
    public static function rollBack()
    {
        self::getConnectionResolver()->connection()->rollBack();
    }


}

?>