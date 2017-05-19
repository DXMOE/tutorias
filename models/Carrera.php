<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carrera".
 *
 * @property integer $id
 * @property string $nombre_carrera
 * @property integer $nu_semestre
 *
 * @property Semestre $nuSemestre
 * @property Semestre $nuSemestre0
 */
class Carrera extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carrera';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_carrera'], 'string'],
            [['nu_semestre'], 'integer'],
            [['nu_semestre'], 'exist', 'skipOnError' => true, 'targetClass' => Semestre::className(), 'targetAttribute' => ['nu_semestre' => 'id']],
            [['nu_semestre'], 'exist', 'skipOnError' => true, 'targetClass' => Semestre::className(), 'targetAttribute' => ['nu_semestre' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre_carrera' => Yii::t('app', 'Nombre Carrera'),
            'nu_semestre' => Yii::t('app', 'Nu Semestre'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuSemestre()
    {
        return $this->hasOne(Semestre::className(), ['id' => 'nu_semestre']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuSemestre0()
    {
        return $this->hasOne(Semestre::className(), ['id' => 'nu_semestre']);
    }
}
