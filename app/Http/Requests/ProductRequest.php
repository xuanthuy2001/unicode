<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Redirect;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_name' => 'required|min:6',
            'product_price' => 'required|integer',

        ];
    }
    public function messages()
    {
        return [
            'required' => 'trường :attribute không được để trống',
            'min' => ' trường :attribute  lớn hơn :min ký tự',
            'integer' => 'trường :attribute  phải phải là số',
        ];
    }
    public function attributes()
    {
        return [
            'product_name' => 'Tên sản phẩm',
            'product_price' => 'Giá sản phẩm'
        ];
    }
    protected function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($validator->errors()->count() > 0) {
                $validator->errors()->add('msg', 'đã có lỗi xảy ra');
            }
        });
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'create_at' => date('Y-m-d H:i:s'),
        ]);
    }

    protected function failedAuthorization()
    {
        // throw new AuthorizationException('bạn không có quyền truy cập');
        // throw new HttpResponseException(Redirect('/')->with('msg', 'bạn không có quyền truy cập')->with('type', 'danger'));
        throw new HttpResponseException(abort(404));
    }
}