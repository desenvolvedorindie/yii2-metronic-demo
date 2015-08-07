<?php

namespace app\models;

use yii\base\Model;

class ComponentsForm extends Model {

    public $typeahead1;
    public $datepicker;

    public function rules() {
        return [
            // name, email, subject and body are required
            [['typeahead1', 'datepicker'], 'required'],
        ];
    }

}
