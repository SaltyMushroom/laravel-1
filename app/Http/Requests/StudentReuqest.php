<?php
/**
 * Created by PhpStorm.
 * User: 钾盐
 * Date: 2018/6/3
 * Time: 11:58
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class StudentReuqest extends FormRequest
{
    public function rules()
    {
        switch ($this->method())
        {
            case 'POST':
                {

                }
        }
    }
    public function messages()
    {
        return [

        ];
    }
}