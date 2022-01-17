<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class DriverCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data'=> $this->collection,
            'links' => [
                'pagination' => [
                    'total' => $this->resource->total(),
                    'per_page' => $this->resource->perPage(),
                    'current_page' => $this->resource->currentPage(),
                    'last_page' => $this->resource->lastPage(),
                    'next_page_url' => $this->resource->nextPageUrl(),
                    'prev_page_url' => $this->resource->previousPageUrl(),
                ]
            ],
        ];
    }
}
