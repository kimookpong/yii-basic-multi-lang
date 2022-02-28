<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Person */

$this->title = Yii::t('app', 'Create Person');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'People'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-create">
    <p class="card-description">
        <?= Yii::t('app', 'Create Information') ?>
    </p>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>