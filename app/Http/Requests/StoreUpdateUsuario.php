<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Models\Usuario;
use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUsuario extends FormRequest
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
        $id = $this->segment(3);
        $user = Usuario::find($id);

        return [
            'name' => "required|min:5|max:60",
            'username' => "required|min:5|max:60|unique:usuarios,username,{$user['username']},username",
            'zipcode' => "required|min:10|max:10",
            'email' => "required|min:5|max:60|unique:usuarios,email,{$user['email']},email",
            'password' => "required|min:5|max:60",

        ];
    }
}
