<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        // Same as 
//        return [
//            'data' => $this->collection
//        ];
        return [
            'data' => $this->collection,
            // Because of collection we can add siblings to our data structure which was not possible even 
            // using with() in User resource. Collection gives you more control over the Data_structure
            'status'=>'success'
        ];
        
    }
}
