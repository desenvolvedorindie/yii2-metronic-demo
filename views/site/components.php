<?php

use yii\helpers\Html;

\wfcreations\metronic\bundles\pages\scripts\ComponentsPickersAsset::register($this);

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Components';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="page-head">
    <div class="page-title">
        <h1><?= Html::encode($this->title) ?> <small>general ui components</small></h1>
    </div>
</div>
