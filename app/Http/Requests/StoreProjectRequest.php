<?php

namespace App\Http\Requests;

use App\Enum\StatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'min:3', 'max:40'],
            'start_date' => ['required'],
            'end_date' => ['required'],
            'value' => ['required'],
            'status' => [new Enum(StatusEnum::class)]
        ];
    }
}
