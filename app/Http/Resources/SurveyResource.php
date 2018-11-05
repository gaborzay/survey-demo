<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SurveyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->_id,
            'name' => $this->name,
            'age' => $this->age,
            'gender' => $this->gender,
            'country' => $this->country,
            'favorite_color' => $this->favorite_color,
            'rating' => $this->rating,
            'likely_to_recommend' => $this->likely_to_recommend,
            'comments' => $this->comments
        ];
    }
}
