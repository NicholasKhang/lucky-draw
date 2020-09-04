<?php

/* @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
use yii\helpers\Html;

$this->title = 'Vue Lucky Draw';
$this->registerJs($this->render("_script.js"));
?>
<div class="col-md-4"></div>
<div class="col-md-4">

	<div class="panel panel-primary" style="max-width:400px">
		<h4 class="panel-heading" style="margin:0">Lucky Draw</h4>
		<div class="panel-body">
			<?php $form = ActiveForm::begin(['id' => 'form-register']) ?>

			<?= $form->field($model, 'name')->textInput(); ?>

			<?= $form->field($model, 'email')->textInput(); ?>

			<?= Html::resetButton('Reset', ['class' => 'btn btn-danger']) ?>
			<?= Html::submitButton('Register', ['id' => 'btn-submit', 'class' => 'btn btn-success pull-right']) ?>

			<?php ActiveForm::end() ?>
		</div>
	</div>

	<?php Modal::begin([
		'id' => 'modal-lucky-draw',
		'headerOptions' => ['id' => 'modal-header', 'class' => 'bg-info'],
		'header' => '<h3 id="modal-title">Lucky Draw</h3>',
		'clientOptions' => [
			'backdrop' => 'static',
			'keyboard' => false,
		]
	]) ?>
	<div id="modal-content"></div>
	<?php Modal::end() ?>


</div>
<div class="col-md-4"></div>