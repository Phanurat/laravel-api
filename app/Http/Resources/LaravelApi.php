<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LaravelApi extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id_api'  => $this->id_api,
            'name_api' => $this->name_api,
            'create_at' => $this->create_at,
            'comment' => $this->comment
        ];
    }
}
