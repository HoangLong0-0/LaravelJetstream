<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = "informations";
    protected $fillable = [
        "name",
        "image",
        "description",
    ];
    public function getImage(){
        if($this->image){
            return asset("upload/".$this->image);
        }
        return asset("upload/default.png");
    }
}
