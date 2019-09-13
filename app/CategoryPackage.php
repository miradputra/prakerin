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
    public static function boot(){
        parent::boot();
        self::deleting(function($category){
            //untuk mengecek apakah kategori masih di gunakan atau tidak oleh item
            if ($category->item->count() > 0){
                //menyimpan pesan error
                $html = 'This Category still been used by Items';
                $html .= '<ul>';
                foreach ($category->item as $data){
                    $html .= "<li>$data->name</li>";
                }
                $html .= '</ul>';
                Session::flash('flash_notification', [
                    "level" => "danger",
                    "message" => $html
                ]);
                //membatalkan proses penghapusan
                return false;
            }
        });
    }
}
