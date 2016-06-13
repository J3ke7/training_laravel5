<?php namespace App\Http\Requests;

class CommentRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->customers ? ',' . $this->customers : '';;
        return [
            'name' => 'required|max:200',
            'summary' => 'required|max:65000',
            'content' => 'required|max:65000',
        ];
    }

}
