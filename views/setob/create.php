<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Setob $model */

$this->title = 'Добавить запись';
$this->params['breadcrumbs'][] = ['label' => 'Setobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setob-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
