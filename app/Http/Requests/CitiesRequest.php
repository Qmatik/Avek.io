<?php
declare(strict_types=1);

namespace App\Http\Requests;

class CitiesRequest extends AbstractRequest
{
    public function getRules(): array
    {
        return [
            'name' => 'required|string|max:50',
        ];
    }
}
