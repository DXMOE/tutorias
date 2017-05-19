<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tipousuario */

$this->title = Yii::t('app', 'Create Tipousuario');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tipousuarios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipousuario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
