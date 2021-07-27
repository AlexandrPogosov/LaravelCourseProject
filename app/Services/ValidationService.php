<?php

namespace App\Services;

use App\Enums\ValidationRules;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class ValidationService
{
    public function check($rule, array $data = null): ?array
    {
        $data = $data ?? request()->input();

        $rules = ValidationRules::get($rule);

        $validData = Validator::make($data, $rules);

        if($validData->fails())
        {
            abort(Response::HTTP_UNPROCESSABLE_ENTITY, $validData->errors());
        }
        return $validData->validated();
    }
}
