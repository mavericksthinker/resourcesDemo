<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return [
//            'id' => $this->id,
//            'name' => $this->name,
//            'profile' => $this->profile
//        ];

        return [
            'id' => $this->id,
            'name' => $this->name,
            // This optional method will allow to restricts from crashing the application in case the data is Null 
            'location' => optional($this->profile)->location
        ];
    }

    /**
     *  This will allow us to pass other params needed as siblings of the return in the toArray()
     * @param \Illuminate\Http\Request $request
     * @return array
     */
//    public function with($request)
//    {
//       return [
//            'status' => 'success'
//        ];
//    }
}
