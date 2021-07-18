<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $table = "campaigns";
    protected $fillable = [
        "name",
        "image",
        "description",
        "category_id",
    ];

    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function getImage(){
        if($this->image){
            return asset("upload/".$this->image);
        }
        return asset("upload/default.png");
    }

    public function users(){
       return $this->belongsToMany(User::class,'campaign_user','campaign_id','user_id');
    }
}
