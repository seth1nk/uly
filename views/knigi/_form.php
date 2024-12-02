<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Knigi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="knigi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'название')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'автор')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'год_выпуска')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'город_издания')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'колво_страниц')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'рейтинг')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
