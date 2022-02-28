<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">


    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'options' => [
            'class' => 'pt-3'
        ],
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
            'inputOptions' => ['class' => 'col-lg-3 form-control'],
            'errorOptions' => ['class' => 'col-lg-12 invalid-feedback'],
        ],
    ]); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-control form-control-lg'])->label(false) ?>

    <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control form-control-lg'])->label(false) ?>

    <?= $form->field($model, 'rememberMe')->checkbox([
        'template' => "<div class=\"col-lg-6 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
    ]) ?>

    <div class="form-group row">
        <?= Html::submitButton('Login', ['class' => 'btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn', 'name' => 'login-button']) ?>
    </div>

    <div class="text-center m-4 font-weight-light">
        Or
    </div>

    <div class="form-group row">
        <button type="button" class="btn btn-block btn-facebook auth-form-btn">
            <i class="ti-facebook mr-2"></i>Connect using facebook
        </button>
    </div>
    <div class="text-center mt-4 font-weight-light">
        Don't have an account? <a href="register.html" class="text-primary">Create</a>
    </div>

    <?php ActiveForm::end(); ?>
</div>