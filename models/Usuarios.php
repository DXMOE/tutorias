<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $paterno
 * @property string $materno
 * @property string $genero
 * @property string $direccion
 * @property string $telefono
 * @property string $estado
 * @property string $ciudad
 * @property string $email
 * @property integer $nu_usuario
 *
 * @property Tipousuario $nuUsuario
 * @property Tipousuario $nuUsuario0
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'paterno'], 'required'],
            [['nombre', 'paterno', 'materno', 'genero', 'direccion', 'telefono', 'estado', 'ciudad', 'email'], 'string'],
            [['nu_usuario'], 'integer'],
            [['nu_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Tipousuario::className(), 'targetAttribute' => ['nu_usuario' => 'id']],
            [['nu_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Tipousuario::className(), 'targetAttribute' => ['nu_usuario' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'paterno' => Yii::t('app', 'Paterno'),
            'materno' => Yii::t('app', 'Materno'),
            'genero' => Yii::t('app', 'Genero'),
            'direccion' => Yii::t('app', 'Direccion'),
            'telefono' => Yii::t('app', 'Telefono'),
            'estado' => Yii::t('app', 'Estado'),
            'ciudad' => Yii::t('app', 'Ciudad'),
            'email' => Yii::t('app', 'Email'),
            'nu_usuario' => Yii::t('app', 'Nu Usuario'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuUsuario()
    {
        return $this->hasOne(Tipousuario::className(), ['id' => 'nu_usuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuUsuario0()
    {
        return $this->hasOne(Tipousuario::className(), ['id' => 'nu_usuario']);
    }
}
