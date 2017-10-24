<?php

namespace app\models;

use Yii;
use yii\Helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * This is the model class for table "siswa".
 *
 * @property integer $id
 * @property integer $nomorpeserta
 * @property string $nama
 * @property integer $id_jeniskelamin
 * @property string $tanggal_lahir
 * @property string $email
 * @property string $photo
 * @property integer $create_at
 *
 * @property Jeniskelamin $idJeniskelamin
 * @property User[] $users
 */
class Siswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'siswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomorpeserta', 'nama', 'id_jeniskelamin', 'tanggal_lahir', 'email', 'create_at'], 'required'],
            [['nomorpeserta', 'id_jeniskelamin', 'create_at'], 'integer'],
            [['tanggal_lahir'], 'safe'],
            [['nama', 'photo'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 50],
            [['id_jeniskelamin'], 'exist', 'skipOnError' => true, 'targetClass' => Jeniskelamin::className(), 'targetAttribute' => ['id_jeniskelamin' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomorpeserta' => 'Nomor Peserta',
            'nama' => 'Nama',
            'id_jeniskelamin' => 'Jenis Kelamin',
            'tanggal_lahir' => 'Tanggal Lahir',
            'email' => 'Email',
            'photo' => 'Photo',
            'create_at' => 'Create At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdJeniskelamin()
    {
        return $this->hasOne(Jeniskelamin::className(), ['id' => 'id_jeniskelamin']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['nama_siswa' => 'id']);
    }

     public function getPhoto($htmlOptions=[])
    {
        //jika file ada dalam direktori
        if($this->photo == null && ! file_exists('@web/uploads/'.$this->photo)){
            return Html::img('@web/images/buku.jpg',$htmlOptions);
        } else {
            return Html::img('@web/uploads/'. $this->photo,$htmlOptions);
        }
    }
    public function getRelationField($relation, $field)
    {
        if (!empty($this->$relation->$field)){
            return $this->$relation->$field;
        }else{
            return null;
        }
    }

    public static function getCount()
    {
        return self::find()->count();
    }
}
