<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateQuestionRequest extends Request {

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
			'description' =>'required|min:3',
            'topic_id'    => 'required'
		];
	}

}
