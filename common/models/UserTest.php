<?php


namespace common\models;

use yii\db\ActiveRecord;

class UserTest extends ActiveRecord
{
    public static function tableName()
    {
        return 'user_test';
    }
}