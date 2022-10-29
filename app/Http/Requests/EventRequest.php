<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => "required|string",
            "description" => "required|string",
            "status" => "required",
            "start_date" => "required|date",
            "end_date" => "date|after:start_date",
            "all_day" => "required|boolean",
            "country" => "string",
            "city" => "string",
            "state" => "string",
        ];
    }
}