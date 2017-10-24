<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $nama
 * @property string $username
 * @property string $password
 * @property string $model
 * @property integer $id_role
 * @property integer $nama_siswa
 * @property integer $create_at
 * @property integer $update_at
 * @property integer $last_login
 *
 * @property Siswa $namaSiswa
 * @property Role $idRole
 */
class Peserta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'username', 'password', 'model', 'id_role', 'nama_siswa', 'create_at', 'update_at', 'last_login'], 'required'],
            [['id_role', 'nama_siswa', 'create_at', 'update_at', 'last_login'], 'integer'],
            [['nama', 'username', 'password', 'model'], 'string', 'max' => 255],
            [['nama_siswa'], 'exist', 'skipOnError' => true, 'targetClass' => Siswa::className(), 'targetAttribute' => ['nama_siswa' => 'id']],
            [['id_role'], 'exist', 'skipOnError' => true, 'targetClass' => Role::className(), 'targetAttribute' => ['id_role' => 'id']],
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
            'username' => 'Username',
            'password' => 'Password',
            'model' => 'Model',
            'id_role' => 'Id Role',
            'nama_siswa' => 'Nama Siswa',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'last_login' => 'Last Login',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNamaSiswa()
    {
        return $this->hasOne(Siswa::className(), ['id' => 'nama_siswa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdRole()
    {
        return $this->hasOne(Role::className(), ['id' => 'id_role']);
    }
}
