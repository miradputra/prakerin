<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoEvent extends Model
{
    protected $fillable =['marketing_name','campaign_name','campaign_duration_start','campaign_duration_end',
                        'priority','promo_description','media','gross_total','sv','package_total','ppn',
                        'grand_total','type_post'];
    public $timestamps = true;

    public function list_tools(){
        return $this->hasMany('App\listTools','promo_id');
    }
}
