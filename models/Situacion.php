<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "situacion".
 *
 * @property integer $id
 * @property string $nombre
 *
 * @property Estudiantes[] $estudiantes
 * @property Estudiantes[] $estudiantes0
 */
class Situacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'situacion';
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
    public function getEstudiantes()
    {
        return $this->hasMany(Estudiantes::className(), ['nu_situacion' => 'id']);
    }

    public static function getAll() {
        $situacion[] = 'Seleccione la situacion';
        foreach (Situacion::find()->all() as $registro) {
            $situacion[$registro->id] = $registro->nombre;
            
        }
     return $situacion;   
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstudiantes0()
    {
        return $this->hasMany(Estudiantes::className(), ['nu_situacion' => 'id']);
    }
}
