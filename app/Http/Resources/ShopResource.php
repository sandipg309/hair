<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class ShopResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'shopId' => $this->shopId,
            'shopDescription'=>$this->shopDescription,
            'contactNumber'=>$this->contactNumber,
            'image'=>url('/uploads/shop/'.$this->image),
            'ownerName'=>$this->ownerName,
            'shopAddress'=>$this->shopAddress,
            'longitude'=>$this->longitude,
            'latitude'=>$this->latitude,
        ];
    }

}
