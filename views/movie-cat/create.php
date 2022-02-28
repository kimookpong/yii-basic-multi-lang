<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MovieCat */

$this->title = Yii::t('app', 'Create Movie Cat');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Movie Cats'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movie-cat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
