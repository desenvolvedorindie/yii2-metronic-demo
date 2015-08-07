<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

    <div class="alert alert-success">
        Thank you for contacting us. We will respond to you as soon as possible.
    </div>
    <p>
        Note that if you turn on the Yii debugger, you should be able
        to view the mail message on the mail panel of the debugger.
        <?php if (Yii::$app->mailer->useFileTransport): ?>
            Because the application is in development mode, the email is not sent but saved as
            a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
            Please configure the <code>useFileTransport</code> property of the <code>mail</code>
            application component to be false to enable email sending.
        <?php endif; ?>
    </p>

<?php else: ?>

    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i><?= Html::encode($this->title) ?>
            </div>
        </div>
        <div class="portlet-body form">
            <?php $form = ActiveForm::begin(['id' => 'contact-form', 'options' => ['class' => 'form-horizontal']]); ?>
            <div class="form-body">
                <p>If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.</p>
                <?=
                $form->field($model, 'name', [
                    'template' => '{label} <div class="col-md-4">{input}{error}{hint}</div>',
                    'inputOptions' => [
                        'class' => 'form-control input-circle'
                    ],
                ])->label(null, ['class' => 'col-md-3 control-label'])
                ?>
                <?=
                $form->field($model, 'email', [
                    'template' => '{label} <div class="col-md-4">{input}{error}{hint}</div>',
                    'inputTemplate' => '<div class="input-group"><span class="input-group-addon input-circle-left"><i class="fa fa-envelope"></i></span>{input}</div>',
                    'inputOptions' => [
                        'class' => 'form-control input-circle-right'
                    ],
                ])->label(null, ['class' => 'col-md-3 control-label'])
                ?>
                <?=
                $form->field($model, 'subject', [
                    'template' => '{label} <div class="col-md-4">{input}{error}{hint}</div>',
                    'inputOptions' => [
                        'class' => 'form-control input-circle'
                    ],
                ])->label(null, ['class' => 'col-md-3 control-label'])
                ?>
                <?=
                $form->field($model, 'body', [
                    'template' => '{label} <div class="col-md-4">{input}{error}{hint}</div>',
                ])->textArea(['rows' => '3'])->label(null, ['class' => 'col-md-3 control-label'])
                ?>
                <?=
                $form->field($model, 'verifyCode', [
                    'template' => '{label} <div class="col-md-4">{input}{error}{hint}</div>',
                ])->widget(Captcha::className())->label(null, ['class' => 'col-md-3 control-label'])
                ?>
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-circle blue', 'name' => 'contact-button']) ?>
                        <?= Html::resetInput('Cancel', ['class' => 'btn btn-circle default', 'type' => 'button']) ?>
                    </div>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

<?php endif; ?>