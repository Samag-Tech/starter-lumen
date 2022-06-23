<?php namespace App\Http\Validations;

use SamagTech\CoreLumen\Core\BaseValidationRequest;

class ExampleValidation extends BaseValidationRequest {

    protected function rules () : array {

        return [
            'field' => 'required',
        ];
    }

    //---------------------------------------------------------------------------------------------------

    protected function messages () : array {
        return [
            'field.required' => 'Il campo è richiesto'
        ];
    }


}