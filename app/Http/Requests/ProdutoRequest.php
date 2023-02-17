<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'codigo' => 'required',
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'codigo.required' => 'O campo código é obrigatório!',
            'nome.required' => 'O campo nome é obrigatório!',
            'descricao.required' => 'O campo descrição é obrigatório!',
            'preco.required' => 'O campo preço é obrigatório!',
            'preco.numeric' => 'O campo preço só aceita valores númericos!'

        ];
    }
}
