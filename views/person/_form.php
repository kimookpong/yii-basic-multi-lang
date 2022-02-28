<?php

use app\models\Person;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\jui\AutoComplete;

/* @var $this yii\web\View */
/* @var $model app\models\Person */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="person-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-6">
            <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'fullname_en')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'birth_date')->textInput(['type' => 'date']) ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'birth_place')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-3">
            <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-3">
            <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'spouse')->widget(AutoComplete::className(), [
                'options' => [
                    'class' => 'form-control'
                ],
                'clientOptions' => [
                    'source' => Person::find()->select(['fullname as id', 'fullname as value', 'fullname as label'])->asArray()->all()
                ]
            ]) ?>
        </div>
        <div class="col-12">
            <?= $form->field($model, 'job')->textInput(['maxlength' => true, 'class' => 'tags-input form-control']) ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'description')->textarea(['rows' => 8]) ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'description_eng')->textarea(['rows' => 8]) ?>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label class="control-label" for="trainer-file_path"><?= Yii::t('app', 'Image file') ?> <span class="text-danger"><?= Yii::t('app', '(Recommended size: {width}X{height} pixels)', ['width' => '600', 'height' => '600']) ?></span></label>
                <?= $form->field($model, 'image_path')->fileInput(["class" => "dropify", "data-default-file" => $model->path($model->image_path), 'data-max-file-size' => '1M', "accept" => "image/*"])->label(false) ?>
            </div>
        </div>
        <div class="col-12">
            <?= $form->field($model, 'status')->inline()->radioList([1 => Yii::t('app', 'Active'), 0 => Yii::t('app', 'Inactive')]) ?>
        </div>
    </div>
    <div class="ln_solid"></div>
    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-save"></i> ' . Yii::t('app', 'Save'), ['class' => 'btn btn-sm btn-success']) ?>
        <?= Html::a('<i class="fas fa-undo"></i> ' . Yii::t('app', 'Back'), ['index'], ['class' => 'btn btn-sm btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>