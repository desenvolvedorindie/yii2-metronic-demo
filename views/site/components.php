<?php

use yii\helpers\Html;
use wfcreations\metronic\widgets\ActiveForm;
use kartik\typeahead\TypeaheadBasic;
use dosamigos\datepicker\DatePicker;

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

<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            Typeahead (composer require <a href="https://github.com/kartik-v/yii2-widget-typeahead">kartik-v/yii2-widget-typeahead</a>)
        </div>
    </div>
    <div class="portlet-body form">
        <div class="form-body">
            <?php $form = ActiveForm::begin(['id' => 'contact-form', 'type' => ActiveForm::TYPE_INLINE]); ?>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            Typeahead (composer require <a href="https://github.com/kartik-v/yii2-widget-typeahead">kartik-v/yii2-widget-typeahead</a>)
        </div>
    </div>
    <div class="portlet-body form">
        <?php $form = ActiveForm::begin(['id' => 'contact-form', 'options' => ['class' => 'form-horizontal']]); ?>
        <div class="form-body">
            <?=
            $form->field($model, 'datepicker', [
                'template' => '{label} <div class="col-md-4">{input}{error}{hint}</div>',
            ])->widget(DatePicker::className(), [
                'inline' => true,
                'clientOptions' => [
                    'autoclose' => true,
                    'format' => 'dd-M-yyyy',
                ],
                'options' => [
                    'class' => 'date-picker',
                ],
            ])->label(null, ['class' => 'col-md-3 control-label'])
            ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>