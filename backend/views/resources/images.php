<?php
/**
 * Created by PhpStorm.
 * User: melle
 * Date: 16-6-2017
 * Time: 23:18
 *
 * @var $this \yii\web\View
 * @var $fileList array
 */

?>
<h2>Images</h2>

<?= \yii\grid\GridView::widget([
    'dataProvider' => new \yii\data\ArrayDataProvider([
        'models' => $fileList,
    ]),
    'columns' => [
        'name',
        [
            'attribute' => 'Image',
            'value' => function ($model) {
                $publicPath = \Yii::$app->params['frontendUrl'] . $model['name'];
                return "<img class='img-responsive thumbnail' style='max-height: 300px;' src='$publicPath' alt='guide image' />";
            },
            'format' => 'html',
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{delete}',
            'urlCreator' => function ($action, $model) {
                return \yii\helpers\Url::to(['resources/delete-image', 'file' => $model['name']]);
            },
        ],
    ]
]);

?>