<?php

namespace App;
use App\Category;
use Illuminate\Database\Eloquent\Model;
class Item extends Model
{
    protected $fillable = [
    	'title', 'description' ,'location' , 'delivery_Location', 'status','category_id'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

     public function images()
    {
        return $this->hasMany(Image::class);
    }

    // public function imageOnly()
    // {
    //     return $this->hasMany(Image::class);
    // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
