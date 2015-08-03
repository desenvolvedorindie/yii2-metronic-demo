<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$exception = Yii::$app->getErrorHandler()->exception;

$code = $exception->statusCode ? : $exception->getCode();

$this->title = $code . ' - ' . $message;
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="alert alert-danger">
    <?= nl2br(Html::encode($message)) ?>
</div>

<p>
    The above error occurred while the Web server was processing your request.
</p>
<p>
    Please contact us if you think this is a server error. Thank you.
</p>