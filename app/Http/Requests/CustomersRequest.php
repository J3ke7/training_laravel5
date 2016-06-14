<?php namespace App\Http\Requests;

use App\Models\Post;

class CommentRequest extends Request
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
    }
}
