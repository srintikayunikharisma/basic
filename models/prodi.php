<?php
namespace app\models;
use yii\db\ActiveRecord;

class Prodi extends ActiveRecord
{
    public static function tableName()
    {
        return 'prodi';
    }
    public function rules()
    {
        return [
            [['id','prodi','jekel','keterangan'],'required'],
            [['prodi','keterangan'],'string'],
            [['id'],'integer'],
        ];
    }
}