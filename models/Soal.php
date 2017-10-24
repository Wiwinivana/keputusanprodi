<?php

namespace app\models;

use Yii;
use yii\Helpers\ArrayHelper;

/**
 * This is the model class for table "soal".
 *
 * @property integer $id
 * @property string $pertanyaan
 *
 * @property SoalPilihan[] $soalPilihans
 */
class Soal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'soal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pertanyaan'], 'required'],
            [['pertanyaan'], 'string', 'max' => 600],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pertanyaan' => 'Pertanyaan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSoalPilihans()
    {
        return $this->hasMany(SoalPilihan::className(), ['id_soal' => 'id']);
    }

    public static function getList()
    {
        return ArrayHelper::map(Soal::find()->all(),'id','pertanyaan');
    }

     public static function getCount()
    {
        return self::find()->count();
    }
}
