<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itempackage extends Model
{
    protected $fillable = ['name', 'description', 'rate', 'media_sample', 'proposal_page','type_quantity', 'enable_quantity'];
    public $timestamps = true;

    public function category(){
        return $this->belongsToMany('App\CategoryPackage', 'category_item', 'category_id', 'item_id');
    }
    public function list_tools(){
        return $this->belongsTo('App\listTools','item_id');
    }
    public static function boot(){
        parent::boot();
        self::deleting(function($item){
            //untuk mengecek apakah kategori masih di gunakan oleh item
            if ($item->promo->count() > 0){
                //untuk menyimpan pesan error
                $html = 'This Item Still been used by List Tools Campaign';
                $html .= '<ul>';
                foreach ($item->promo as $data){
                    $html .= "<li>$data->marketing_name</li>";
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
