<?php

namespace app\controllers;

use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';
    // public function actions()
    // {
    //     $actions = parent::actions();

    //     // disable the "delete" and "create" actions
    //     unset($actions['delete'], $actions['create']);

    //     // customize the data provider preparation with the "prepareDataProvider()" method
    //     $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];

    //     return $actions;
    // }
    // public function prepareDataProvider()
    // {
    //     // prepare and return a data provider for the "index" action
    // }
}