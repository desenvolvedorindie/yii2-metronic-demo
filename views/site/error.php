<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

wfcreations\metronic\bundles\pages\styles\ErrorAsset::register($this);

$exception = Yii::$app->getErrorHandler()->exception;

$code = $exception->statusCode ? : $exception->getCode();

$this->title = $code . ' - ' . $message;
?>

<div class="page-container">
    <div class="row">
        <div class="col-md-12 page-500">
            <div class="number">
                <?= Html::encode($code) ?>
            </div>
            <div class="details">
                <h3><?= nl2br(Html::encode($message)) ?></h3>
                <p>
                    We are fixing it!<br>
                    Please come back in a while.<br><br>
                </p>
            </div>
        </div>
    </div>
</div>