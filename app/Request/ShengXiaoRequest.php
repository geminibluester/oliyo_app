<?php

declare(strict_types=1);

namespace App\Request;

use Hyperf\Validation\Request\FormRequest;

class ShengXiaoRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'nan' => 'required|max:10',
            'nv' => 'required|max:10',
        ];
    }
    /**
     * 获取已定义验证规则的错误消息
     */
    public function messages(): array
    {
        return [
            'nan.required' => '配对生肖必须存在',
            'nv.required'  => '待配对生肖必须存在',
        ];
    }
}
