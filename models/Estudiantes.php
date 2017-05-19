<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estudiantes".
 *
 * @property integer $id
 * @property string $nombre_alumno
 * @property integer $nu_situacion
 *
 * @property Actividades[] $actividades
 * @property Actividades[] $actividades0
 * @property Situacion $nuSituacion
 * @property Situacion $nuSituacion0
 */
class Estudiantes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estudiantes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_alumno'], 'string'],
            [['nu_situacion'], 'integer'],
            [['nu_situacion'], 'exist', 'skipOnError' => true, 'targetClass' => Situacion::className(), 'targetAttribute' => ['nu_situacion' => 'id']],
            [['nu_situacion'], 'exist', 'skipOnError' => true, 'targetClass' => Situacion::className(), 'targetAttribute' => ['nu_situacion' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre_alumno' => Yii::t('app', 'Nombre Alumno'),
            'nu_situacion' => Yii::t('app', 'Nu Situacion'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActividades()
    {
        return $this->hasMany(Actividades::className(), ['nu_estudiantes' => 'id']);
    }

    public static function getAll() {
        $estudiantes[] = 'Seleccione al estudiante';
        foreach (Estudiantes::find()->all() as $registro) {
            $estudiantes[$registro->id] = $registro->nombre_alumno;
            
        }
     return $estudiantes;   
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActividades0()
    {
        return $this->hasMany(Actividades::className(), ['nu_estudiantes' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuSituacion()
    {
        return $this->hasOne(Situacion::className(), ['id' => 'nu_situacion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuSituacion0()
    {
        return $this->hasOne(Situacion::className(), ['id' => 'nu_situacion']);
    }
}
