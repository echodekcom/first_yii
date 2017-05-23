<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Member */
/* @var $form ActiveForm */
?>
<div class="member-formregis">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>

        <?= $form->field($model, 'firstname')->textInput(['placeholder'=>'ชื่อสมาชิก']) ?>
        <?= $form->field($model, 'lastname')->textInput(['placeholder'=>'นามสกุลสมาชิก']) ?>
        <?= $form->field($model, 'email')->textInput(['placeholder'=>'อีเมล์สมาชิก']) ?>
        <?= $form->field($model, 'tel')->textInput(['type'=>'number'])->textInput(['placeholder'=>'เบอร์โทรศัพท์']) ?>
        <?= $form->field($model, 'address')->textArea(['placeholder'=>'ที่อยู่...']) ?>
        <?= $form->field($model, 'birthday')->textInput(['type'=>'date'])?>

        <div class="form-group text-center">
            <?= Html::submitButton('บันทึก', ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton('ล้างหน้าต่าง', ['class' => 'btn btn-danger']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- member-formregis -->
