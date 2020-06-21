<?php
namespace App;

use Illuminate\Database\Eloquent\Model;


class District extends Model
{

	protected $table='districts';
    protected $primaryKey = 'districtId';

    protected $fillable = [
        'districtName','districtDescription'
    ];

    // public function awardToUser()
    // {
    //     return $this->hasMany('App\Model\AwardToUser','awardId','awardId');
    // }

    // public function user()
    // {
    //     return $this->belongsToMany('App\Model\User', 'award_to_user','awardId','userId');
    // }
    public function location()
     {
        return $this->hasMany('App\Location','districtId');
    }





}
