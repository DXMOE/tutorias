<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipousuario".
 *
 * @property integer $id
 * @property string $nombre
 *
 * @property Usuarios[] $usuarios
 * @property Usuarios[] $usuarios0
 */
class Tipousuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipousuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'string'],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::className(), ['nu_usuario' => 'id']);
    }

    public static function getAll() {
        $tipousuario[] = 'Seleccione el tipo de usuario';
        foreach (Tipousuario::find()->all() as $registro) {
            $tipousuario[$registro->id] = $registro->nombre;
            
        }
     return $tipousuario;   
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios0()
    {
        return $this->hasMany(Usuarios::className(), ['nu_usuario' => 'id']);
    }
}
