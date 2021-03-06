<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "table_type03".
 *
 * @property integer $id
 * @property string $fname
 * @property string $lname
 * @property string $salary
 */
class TableTypeThree extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'table_type03';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['salary'], 'number'],
            [['fname', 'lname'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'salary' => 'Salary',
        ];
    }
}
