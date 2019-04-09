<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_usuarios".
 *
 * @property int $id
 * @property string $usuario
 * @property string $nombre
 * @property string $apellido
 * @property string $telefono1
 * @property string $telefono2
 * @property string $correo
 * @property string $clave
 * @property string $tipo
 * @property string $estado
 */
class Usuarios extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usuario', 'nombre', 'apellido', 'clave', 'tipo'], 'required'],
            [['usuario'], 'string', 'max' => 12],
            [['nombre', 'apellido', 'correo'], 'string', 'max' => 30],
            [['telefono1', 'telefono2'], 'string', 'max' => 11],
            [['clave'], 'string', 'max' => 32],
            [['tipo', 'estado'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'usuario' => 'Usuario',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'telefono1' => 'Telefono1',
            'telefono2' => 'Telefono2',
            'correo' => 'Correo',
            'clave' => 'Clave',
            'tipo' => 'Tipo',
            'estado' => 'Estado',
        ];
    }

    /**
     * {@inheritdoc}
     * @return UsuariosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsuariosQuery(get_called_class());
    }

    /////////////////////////////////////////////////////////////////////
    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        /*foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;*/
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public function findByUsername($username)
    {
        /*foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
                return null;
            }*/
            $usuario= Usuarios::find()->where(['usuario'=>$username])->one();
            if($usuario)
            {
                //var_dump($usuario->usuario);
                //exit;
                return new static($usuario);
            }
            return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        //return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        //return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($user,$password)
    {
        $usuario= Usuarios::find()->where(['usuario'=>$user->usuario])
        ->andwhere(['clave'=>md5($password)])
        ->one();
        //var_dump($usuario);
        //exit;
        if($usuario)
        {
            return $password;
        }

    }
    ///////////////////////////////////////////////////////////////////////////////////////////
}
