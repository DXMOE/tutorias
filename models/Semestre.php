<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "semestre".
 *
 * @property integer $id
 * @property string $nombre_semestre
 *
 * @property Carrera[] $carreras
 * @property Carrera[] $carreras0
 */
class Semestre extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'semestre';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_semestre'], 'required'],
            [['nombre_semestre'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre_semestre' => Yii::t('app', 'Nombre Semestre'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarreras()
    {
        return $this->hasMany(Carrera::className(), ['nu_semestre' => 'id']);
    }

    public static function getAll() {
        $semestre[] = 'Seleccione el semestre';
        foreach (Semestre::find()->all() as $registro) {
            $semestre[$registro->id] = $registro->nombre_semestre;
            
        }
     return $semestre;   
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarreras0()
    {
        return $this->hasMany(Carrera::className(), ['nu_semestre' => 'id']);
    }
}
