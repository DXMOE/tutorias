<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diagnostico".
 *
 * @property integer $id
 * @property string $descripcion
 * @property integer $nu_actividades
 *
 * @property Actividades $nuActividades
 * @property Actividades $nuActividades0
 */
class Diagnostico extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diagnostico';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion'], 'required'],
            [['descripcion'], 'string'],
            [['nu_actividades'], 'integer'],
            [['nu_actividades'], 'exist', 'skipOnError' => true, 'targetClass' => Actividades::className(), 'targetAttribute' => ['nu_actividades' => 'id']],
            [['nu_actividades'], 'exist', 'skipOnError' => true, 'targetClass' => Actividades::className(), 'targetAttribute' => ['nu_actividades' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'descripcion' => Yii::t('app', 'Descripcion'),
            'nu_actividades' => Yii::t('app', 'Nu Actividades'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuActividades()
    {
        return $this->hasOne(Actividades::className(), ['id' => 'nu_actividades']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuActividades0()
    {
        return $this->hasOne(Actividades::className(), ['id' => 'nu_actividades']);
    }
}
