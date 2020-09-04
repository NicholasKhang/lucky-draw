<?php

namespace app\models;

use yii\base\Model;

class RegistrationForm extends Model
{
	public $name, $email;

	public function rules()
	{
		return [
			[['name', 'email'], 'required'],
			[['email'], 'email'],
		];

	}
}