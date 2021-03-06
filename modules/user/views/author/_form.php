<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Author */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="author-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'surname')->label('Фамилия')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->label('Имя')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patronymic')->label('Отчество')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
