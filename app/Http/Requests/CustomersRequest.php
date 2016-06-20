<?php namespace App\Http\Requests;

class CustomersRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:200',
            'email' => 'required|max:65000',
            'descriptions' => 'required|max:65000',
        ];
        return Validator::make($input, $rules);
    }
}
