<?php

namespace app\models;
use app\models\User;
use yii\Helpers\ArrayHelper;
use Yii;

class User extends \yii\db\ActiveRecord   implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public $auth_key;
    public $access_token;
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
            'id_role' => 'Role',
            'nama_siswa' => 'Nama Siswa',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'last_login' => 'Last Login',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    
    

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        $user = User::findOne($id);
        if(count($user)){
            return new static($user);
        }
        return null;
    }


    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        $user = User::find()->where(['accessToken'=>$token])->one();
        if(count($user)){
            return new static($user);
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        $user = User::find()->where(['username'=>$username])->one();
        if(count($user)) {
            return new static($user);
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->password);
    }

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

    public function getRelationField($relation, $field)
    {
        if (!empty($this->$relation->$field)){
            return $this->$relation->$field;
        }else{
            return null;
        }
    }


}
    