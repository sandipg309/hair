<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class LocationResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'locationId' => $this->locationId,
            'locationName'=>$this->locationName,
            'locationDescription'=>$this->locationDescription,
        ];
    }

}
