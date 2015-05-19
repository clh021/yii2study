<?php

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],#name和email值都是必须的
            ['email', 'email'],#email的值必须满足 email 地址验证
        ];
    }
}