<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return  [
            'id' => $this->id,
            'title' => "제목 : " . $this->title,
            'link' => "링크 : " . $this->link,
            'description' => "설명 : " . $this->description,
            'create_at' => $this->created_at->diffForHumans() . " 전에 작성되었다."
        ];
    }
}
