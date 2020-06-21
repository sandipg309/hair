<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class DistrictResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'districtId' => $this->districtId,
            'districtName'=>$this->districtName,
            'districtDescription'=>$this->districtDescription,
        ];
    }

}
