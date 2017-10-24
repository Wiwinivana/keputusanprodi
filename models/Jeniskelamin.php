<?php

namespace app\models;

use Yii;
use yii\Helpers\ArrayHelper;

/**
 * This is the model class for table "jeniskelamin".
 *
 * @property integer $id
 * @property string $nama
 *
 * @property Siswa[] $siswas
 */
class Jeniskelamin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jeniskelamin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(Siswa::className(), ['id_jeniskelamin' => 'id']);
    }
    public static function getList()
    {
        return ArrayHelper::map(JenisKelamin::find()->all(),'id','nama');
    }
}
