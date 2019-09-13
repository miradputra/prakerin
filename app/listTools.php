<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listTools extends Model
{
  protected $fillable =['promo_id','item_id','type'];
  public $timestamps ='true';

  public function item(){
      return $this->belongsTo('App\Itempackage','item_id');
  }
  public function promo(){
      return $this->belongsTo('App\PromoEvent','promo_id');
  }
}
