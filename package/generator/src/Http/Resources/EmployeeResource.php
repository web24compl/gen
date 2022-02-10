<?php

namespace Gabenn\Generator\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
