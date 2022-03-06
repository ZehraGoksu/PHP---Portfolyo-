<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImages extends Model {

    public $timestamps  = false;
    protected $table = "project_images";
    protected $primaryKey = "id";


    protected $fillable = [
        "project_id", 
        "original_image",  
        "small_image",
        "image_path",
        	
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