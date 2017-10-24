<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "soal_pilihan".
 *
 * @property integer $id
 * @property integer $id_soal
 * @property string $pilihan
 * @property integer $status
 *
 * @property Soal $idSoal
 */
class SoalPilihan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'soal_pilihan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_soal', 'pilihan', 'status'], 'required'],
            [['id_soal', 'status'], 'integer'],
            [['pilihan'], 'string', 'max' => 500],
            [['id_soal'], 'exist', 'skipOnError' => true, 'targetClass' => Soal::className(), 'targetAttribute' => ['id_soal' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_soal' => 'Soal',
            'pilihan' => 'Pilihan Jawaban',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSoal()
    {
        return $this->hasOne(Soal::className(), ['id' => 'id_soal']);
    }

     public function getRelationField($relation, $field)
    {
        if (!empty($this->$relation->$field)){
            return $this->$relation->$field;
        }else{
            return null;
        }
    }
}
