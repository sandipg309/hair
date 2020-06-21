<?php
namespace App;

use Illuminate\Database\Eloquent\Model;


class Location extends Model
{

	protected $table='locations';
    protected $primaryKey = 'locationId';

    protected $fillable = [
        'locationName','locationDescription'
    ];


      public function district()
    {
        return $this->belongsTo('App\District','districtId','locationId');
    }

    

   



}
