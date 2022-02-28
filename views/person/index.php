<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'People');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="person-index">
    <?= GridView::widget([
        'tableOptions' => ['class' => 'table table-striped'],
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn', 'headerOptions' => ['style' => 'width:5%']],
            [
                'attribute' => 'fullname',
                'content' => function ($model) {
                    return '<div class="d-flex">
                    <div class="pr-2">
                        <img src="' . Yii::$app->homeUrl . Yii::$app->helpers->showCropThumbnail($model->image_path, 64, 64, 'images/user.png') . '" class="avatar">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0">' . $model->fullname . '</h6>
                        <p class="text-sm text-secondary mb-0">' . $model->fullname_en . '</p>
                    </div>
              </div>';
                },
            ],
            [
                'attribute' => 'status',
                'content' => function ($model) {
                    if ($model->status == '1') {
                        return '<label class="badge badge-success">' . Yii::t('app', 'Active') . '</label>';
                    } else {
                        return '<label class="badge badge-danger">' . Yii::t('app', 'Inactive') . '</label>';
                    }
                },
                'headerOptions' => ['style' => 'width:10%'],
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => Html::a('<i class="fas fa-plus ml-0"></i> ' . Yii::t('app', 'Create'), ['create'], ['class' => 'btn btn-sm btn-outline-primary btn-icon-text']),
                'template' => '<div class="btn-group text-center">{update}{delete}</div>',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('<i class="fa fa-edit"></i>', $url, ['class' => 'btn btn-sm btn-outline-info btn-icon-text']);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<i class="far fa-trash-alt"></i>', $url, [
                            'data' => [
                                'method' => 'post',
                                'confirm' => Yii::t('app', 'Are you sure to delete?'),
                            ],
                            'class' => 'btn btn-sm btn-outline-danger btn-icon-text'
                        ]);
                    }

                ],
                'headerOptions' => ['style' => 'width:10%'],
            ],
        ],
    ]); ?>


</div>