<?php
declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Validation\Factory;
use Illuminate\Validation\ValidationException;

abstract class AbstractRequest
{
    public function __construct(protected Request $request, protected Factory $validator)
    {
    }

    /**
     * @throws ValidationException
     */
    public function validate(): void
    {
        $this->validator->make($this->request->all(), $this->getRules())->validate();
    }

    public abstract function getRules(): array;
}
