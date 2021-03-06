<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Carrera */

$this->title = Yii::t('app', 'Create Carrera');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Carreras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carrera-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'semestre' => $semestre,
    ]) ?>

</div>
