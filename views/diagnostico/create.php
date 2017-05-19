<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Diagnostico */

$this->title = Yii::t('app', 'Create Diagnostico');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Diagnosticos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnostico-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'actividades' => $actividades,
    ]) ?>

</div>
