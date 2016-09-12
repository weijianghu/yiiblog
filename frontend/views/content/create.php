<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\News */

$this->title = Yii::t('frontend/common', 'Create News');
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend/common', 'News'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>