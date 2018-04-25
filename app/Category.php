<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;
class Category extends Model
{
    protected $fillable=[

    	'parent_id','category',

    ];

    public function items()
    {
    	return $this->hasMany(Item::class);
    }

    public function parent($id)
    {
    	$parent = Category::find($id)->category;
    	return $parent;
    }
}
