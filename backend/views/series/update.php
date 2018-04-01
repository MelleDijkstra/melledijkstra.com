<?php

use yii\helpers\Html;

/**
 * @var $this yii\web\View
 * @var $model common\models\Series
 * @var $guides array
 */

$this->title = Yii::t('series', 'Update {modelClass}: ', [
        'modelClass' => 'Series',
    ]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('series', 'Series'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('series', 'Update');
?>
<div class="series-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'guides' => $guides,
    ]) ?>

</div>
