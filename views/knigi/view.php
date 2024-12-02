<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Knigi $model */

$this->title = $model->код_книги;
$this->params['breadcrumbs'][] = ['label' => 'Knigis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="knigi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить запись', ['update', 'код_книги' => $model->код_книги], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить запись', ['delete', 'код_книги' => $model->код_книги], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'код_книги',
            'название',
            'автор',
            'год_выпуска',
            'город_издания',
            'колво_страниц',
            'рейтинг',
        ],
    ]) ?>

</div>
