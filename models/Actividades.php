<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actividades".
 *
 * @property integer $id
 * @property string $descripcion
 * @property integer $nu_estudiantes
 *
 * @property Estudiantes $nuEstudiantes
 * @property Estudiantes $nuEstudiantes0
 * @property Diagnostico[] $diagnosticos
 * @property Diagnostico[] $diagnosticos0
 */
class Actividades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'actividades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion'], 'string'],
            [['nu_estudiantes'], 'integer'],
            [['nu_estudiantes'], 'exist', 'skipOnError' => true, 'targetClass' => Estudiantes::className(), 'targetAttribute' => ['nu_estudiantes' => 'id']],
            [['nu_estudiantes'], 'exist', 'skipOnError' => true, 'targetClass' => Estudiantes::className(), 'targetAttribute' => ['nu_estudiantes' => 'id']],
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
            'nu_estudiantes' => Yii::t('app', 'Nu Estudiantes'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuEstudiantes()
    {
        return $this->hasOne(Estudiantes::className(), ['id' => 'nu_estudiantes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuEstudiantes0()
    {
        return $this->hasOne(Estudiantes::className(), ['id' => 'nu_estudiantes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiagnosticos()
    {
        return $this->hasMany(Diagnostico::className(), ['nu_actividades' => 'id']);
    }

    public static function getAll() {
        $actividades[] = 'Seleccione la actividad';
        foreach (Actividades::find()->all() as $registro) {
            $actividades[$registro->id] = $registro->descripcion;
            
        }
     return $actividades;   
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiagnosticos0()
    {
        return $this->hasMany(Diagnostico::className(), ['nu_actividades' => 'id']);
    }
}
