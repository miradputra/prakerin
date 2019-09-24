<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryPackage extends Model
{
    protected $fillable = ['name', 'description', 'baner'];
    public $timestamps = true;

    public function item(){
        return $this->belongsToMany('App\Itempackage', 'category_item', 'item_id', 'category_id');

    }
}
