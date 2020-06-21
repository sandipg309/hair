<?php
namespace App;

use Illuminate\Database\Eloquent\Model;


class Shop extends Model
{

	protected $table='shops';
    protected $primaryKey = 'shopId';

    protected $fillable = [
        'shopName','shopDescription','contactNumber','image','ownerName','shopAddress','longitude','latitude'
    ];

   



}
